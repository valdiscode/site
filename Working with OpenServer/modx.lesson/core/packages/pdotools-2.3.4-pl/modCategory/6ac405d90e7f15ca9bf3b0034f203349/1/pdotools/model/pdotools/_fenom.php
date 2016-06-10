<?php

if (!class_exists('Fenom')) {
    require dirname(dirname(__FILE__)) . '/fenom/Fenom.php';
    require dirname(dirname(__FILE__)) . '/fenom/Fenom/ProviderInterface.php';
    Fenom::registerAutoload();
}

class FenomX extends Fenom
{
    /** @var pdoTools $pdoTools */
    protected $pdoTools;
    /** @var modX $modx */
    protected $modx;


    /**
     * FenomX constructor.
     *
     * @param pdoTools $pdoTools
     */
    public function __construct(pdoTools $pdoTools)
    {
        if (!class_exists('modChunkProvider')) {
            require dirname(dirname(__FILE__)) . '/fenom/Providers/ModChunk.php';
            require dirname(dirname(__FILE__)) . '/fenom/Providers/ModTemplate.php';
        }
        $provider = new modChunkProvider($pdoTools);

        parent::__construct($provider);

        $cache = MODX_CORE_PATH . 'cache/';
        if (!file_exists($cache)) {
            mkdir($cache);
        }
        $this->setCompileDir($cache);
        $this->addProvider('template', new modTemplateProvider($pdoTools));

        $default_options = array(
            'force_compile' => true,
            'disable_cache' => true,
            'force_include' => true,
        );
        if (!$pdoTools->config['useFenomPHP']) {
            $this->removeAccessor('php');
            $default_options['disable_native_funcs'] = true;
        }
        if ($options = $pdoTools->modx->fromJSON($pdoTools->modx->getOption('pdotools_fenom_options'))) {
            $options = array_merge($options, $default_options);
        } else {
            $options = $default_options;
        }
        $this->setOptions($options);

        $this->pdoTools = $pdoTools;
        $this->modx = $pdoTools->modx;

        $this->_addDefaultModifiers();
    }


    /**
     * Add default modifiers
     */
    protected function _addDefaultModifiers()
    {
        $modx = $this->modx;
        $pdo = $this->pdoTools;
        $fenom = $this;

        // PHP Functions

        $this->_modifiers = array_merge(
            $this->_modifiers,
            array(
                'md5' => 'md5',
                'sha1' => 'sha1',
                'crc32' => 'crc32',
                'urldecode' => 'urldecode',
                'urlencode' => 'urlencode',
                'rawurldecode' => 'rawurldecode',
                'base64_decode' => 'base64_decode',
                'base64_encode' => 'base64_encode',
                'http_build_query' => 'http_build_query',
                'print_r' => 'print_r',
                'var_dump' => 'var_dump',
                'dump' => 'var_dump',
                'nl2br' => 'nl2br',
                'ellipsis' => 'Fenom\Modifier::truncate',
                'len' => 'Fenom\Modifier::length',
                'length' => 'Fenom\Modifier::length',
                'strlen' => 'Fenom\Modifier::length',
            )
        );

        // String Modifiers

        $this->_modifiers['lower'] =
        $this->_modifiers['low'] =
        $this->_modifiers['lcase'] =
        $this->_modifiers['lowercase'] =
        $this->_modifiers['strtolower'] = function ($string, $enc = 'utf-8') {
            return function_exists('mb_strtolower')
                ? mb_strtolower($string, $enc)
                : strtolower($string);
        };

        $this->_modifiers['upper'] =
        $this->_modifiers['up'] =
        $this->_modifiers['ucase'] =
        $this->_modifiers['uppercase'] =
        $this->_modifiers['strtoupper'] = function ($string, $enc = 'utf-8') {
            return function_exists('mb_strtoupper')
                ? mb_strtoupper($string, $enc)
                : strtoupper($string);
        };

        $this->_modifiers['ucwords'] = function ($string, $enc = 'utf-8') {
            return function_exists('mb_convert_case')
                ? mb_convert_case($string, MB_CASE_TITLE, $enc)
                : ucwords($string);
        };

        $this->_modifiers['ucfirst'] = function ($string, $enc = 'utf-8') {
            return function_exists('mb_strtoupper')
                ? mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc)
                . mb_strtolower(mb_substr($string, 1, null, $enc), $enc)
                : ucfirst($string);
        };

        $this->_modifiers['htmlent'] =
        $this->_modifiers['htmlentities'] = function ($string, $enc = 'utf-8') {
            return htmlentities($string, ENT_QUOTES, $enc);
        };

        $this->_modifiers['limit'] = function ($string, $limit = 100, $enc = 'utf-8') {
            $string = html_entity_decode($string, ENT_COMPAT, $enc);

            return function_exists('mb_substr')
                ? mb_substr($string, 0, $limit, $enc)
                : substr($string, 0, $limit);
        };

        $this->_modifiers['esc'] =
        $this->_modifiers['tag'] = function ($string) {
            $string = preg_replace('/&amp;(#[0-9]+|[a-z]+);/i', '&$1;', htmlspecialchars($string));

            return str_replace(
                array('[', ']', '`', '{', '}'),
                array('&#91;', '&#93;', '&#96;', '&#123;', '&#125;'),
                $string
            );
        };

        $this->_modifiers['notags'] =
        $this->_modifiers['striptags'] =
        $this->_modifiers['stripTags'] =
        $this->_modifiers['strip_tags'] = function ($string, $allowable_tags = null) {
            return strip_tags($string, $allowable_tags);
        };

        $this->_modifiers['stripmodxtags'] = function ($string) {
            return preg_replace("/\\[\\[([^\\[\\]]++|(?R))*?\\]\\]/s", '', $string);
        };

        $this->_modifiers['cdata'] = function ($string, $enc = 'utf-8') {
            if (function_exists('mb_strlen')) {
                $len = mb_strlen($string, $enc);
                if (mb_strpos($string, '[', 0, $enc) === 0) {
                    $string = ' ' . $string;
                }
                if (mb_strpos($string, ']', 0, $enc) === $len) {
                    $string = $string . ' ';
                }
            } else {
                $len = strlen($string);
                if (strpos($string, '[') === 0) {
                    $string = ' ' . $string;
                }
                if (strpos($string, ']') === $len) {
                    $string = $string . ' ';
                }
            }

            return "<![CDATA[{$string}]]>";
        };


        $this->_modifiers['reverse'] =
        $this->_modifiers['strrev'] = function ($string) {
            $ar = array();
            preg_match_all('/(\d+)?./us', $string, $ar);

            return join('', array_reverse($ar[0]));
        };

        $this->_modifiers['wordwrap'] = function ($string, $width = null, $break = "<br />\n ") {
            if (!$width) {
                $width = 70;
            }

            return wordwrap($string, $width, $break, false);
        };

        $this->_modifiers['wordwrapcut'] = function ($string, $width = null, $break = "<br />\n ") {
            if (!$width) {
                $width = 70;
            }

            return wordwrap($string, $width, $break, true);
        };

        $this->_modifiers['fuzzydate'] = function ($date, $format = '%b %e') use ($modx) {
            $output = '&mdash;';

            if (!empty($date)) {
                if (empty($modx->lexicon)) {
                    $modx->getService('lexicon', 'modLexicon');
                }
                $modx->lexicon->load('filters');
                $time = !is_numeric($date)
                    ? strtotime($date)
                    : $date;
                if ($time >= strtotime('today')) {
                    $output = $modx->lexicon('today_at', array('time' => strftime('%I:%M %p', $time)));
                } elseif ($time >= strtotime('yesterday')) {
                    $output = $modx->lexicon('yesterday_at', array('time' => strftime('%I:%M %p', $time)));
                } else {
                    $output = strftime($format, $time);
                }
            }

            return $output;
        };

        // Conditional Operators

        $this->_modifiers['ismember'] =
        $this->_modifiers['memberof'] =
        $this->_modifiers['mo'] = function ($id, $groups = array()) use ($modx) {
            if (empty($id)) {
                $id = $modx->user->get('id');
            }
            if (!is_array($groups)) {
                $groups = array_map('trim', explode(',', $groups));
            }

            /** @var $user modUser */
            if ($user = $modx->getObject('modUser', $id)) {
                return $user->isMember($groups);
            }

            return false;
        };

        $this->_modifiers['isloggedin'] = function ($ctx = null) use ($modx) {
            if (empty($ctx)) {
                $ctx = $modx->context->get('key');
            }

            return $modx->user->isAuthenticated($ctx);
        };

        $this->_modifiers['isnotloggedin'] = function ($ctx = null) use ($modx) {
            if (empty($ctx)) {
                $ctx = $modx->context->get('key');
            }

            return !$modx->user->isAuthenticated($ctx);
        };

        // MODX functions

        $this->_modifiers['url'] = function ($id, $options = array(), $args = array()) use ($pdo) {
            return $pdo->makeUrl($id, $options, $args);
        };

        $this->_modifiers['lexicon'] = function ($key, $params = array(), $language = '') use ($modx) {
            return $modx->lexicon($key, $params, $language);
        };

        $this->_modifiers['user'] =
        $this->_modifiers['userinfo'] = function ($id, $field = 'username') use ($modx) {
            if (empty($id)) {
                $id = $modx->user->get('id');
            }
            $output = '';
            /** @var modUser $user */
            if ($user = $modx->getObjectGraph('modUser', '{"Profile":{}}', $id)) {
                $data = array_merge($user->toArray(), $user->Profile->toArray());
                unset($data['cachepwd'], $data['salt'], $data['sessionid'], $data['password'], $data['session_stale']);

                if (strpos($field, 'extended.') === 0 && isset($data['extended'][substr($field, 9)])) {
                    $output = $data['extended'][substr($field, 9)];
                } elseif (strpos($field, 'remote_data.') === 0 && isset($data['remote_data'][substr($field, 12)])) {
                    $output = $data['remote_data'][substr($field, 12)];
                } elseif (isset($data[$field])) {
                    $output = $data[$field];
                }
            }

            return $output;
        };

        $this->_modifiers['resource'] = function ($id, $field = null) use ($pdo, $modx, $fenom) {
            /** @var modResource $resource */
            if (empty($id)) {
                $resource = $modx->resource;
            } elseif (!$resource = $pdo->getStore($id, 'resource')) {
                $resource = $modx->getObject('modResource', $id);
                $pdo->setStore($id, $resource, 'resource');
            }

            $output = '';
            if (!empty($resource)) {
                if (!empty($field)) {
                    if (strtolower($field) == 'content') {
                        $output = $resource->getContent();
                    } elseif (array_key_exists($field, $modx->getFields($resource->get('class_key')))) {
                        $output = $resource->get($field);
                    } else {
                        $field = preg_replace('#^tv\.#i', '', $field);
                        $output = $resource->getTVValue($field);
                    }
                } else {
                    $output = $resource->toArray();
                }
            }

            return $output;
        };

        // Developer Functions

        $this->_modifiers['print'] = function ($var, $wrap = true) use ($fenom) {
            $output = print_r($var, true);
            $output = $fenom->_modifiers['esc']($output);
            if ($wrap) {
                $output = '<pre>' . $output . '</pre>';
            }

            return $output;
        };

        $this->_modifiers['setPlaceholder'] =
        $this->_modifiers['toPlaceholder'] = function ($value, $key) use ($modx) {
            $modx->toPlaceholder($key, $value);
        };

        $this->_modifiers['placeholder'] =
        $this->_modifiers['fromPlaceholder'] = function ($key) use ($modx) {
            return $modx->getPlaceholder($key);
        };

        $this->_modifiers['cssToHead'] = function ($string) use ($modx) {
            $modx->regClientCSS($string);
        };

        $this->_modifiers['htmlToHead'] = function ($string) use ($modx) {
            $modx->regClientStartupHTMLBlock($string);
        };

        $this->_modifiers['htmlToBottom'] = function ($string) use ($modx) {
            $modx->regClientHTMLBlock($string);
        };

        $this->_modifiers['jsToHead'] = function ($string, $plaintext = false) use ($modx) {
            $modx->regClientStartupScript($string, $plaintext);
        };

        $this->_modifiers['jsToBottom'] = function ($string, $plaintext = false) use ($modx) {
            $modx->regClientScript($string, $plaintext);
        };

        $this->_modifiers['json_encode'] =
        $this->_modifiers['toJSON'] = function ($array) use ($modx) {
            return $modx->toJSON($array);
        };

        $this->_modifiers['json_decode'] =
        $this->_modifiers['fromJSON'] = function ($string) use ($modx) {
            return $modx->fromJSON($string);
        };

        $this->_modifiers['setOption'] = function ($var, $key) use ($modx) {
            $modx->setOption($key, $var);
        };

        $this->_modifiers['getOption'] =
        $this->_modifiers['option'] = function ($key) use ($modx) {
            return $modx->getOption($key);
        };
    }


    /**
     * Modifier autoloader
     *
     * @param string $name
     * @param Fenom\Template $template
     *
     * @return bool
     */
    protected function _loadModifier($name, $template)
    {
        $modx = $this->modx;
        $pdo = $this->pdoTools;

        return function ($input, $options = null) use ($name, $modx, $pdo) {
            /** @var modSnippet $snippet */
            if (!$snippet = $pdo->getStore($name, 'snippet')) {
                if ($snippet = $modx->getObject('modSnippet', array('name' => $name))) {
                    $pdo->setStore($name, $snippet, 'snippet');
                } else {
                    $modx->log(modX::LOG_LEVEL_ERROR,
                        "[pdoTools] Could not load snippet \"{$name}\" as Fenom modifier"
                    );

                    return $input;
                }
            }
            $snippet->_cacheable = false;
            $snippet->_processed = false;
            $snippet->_content = '';
            $result = $snippet->process(array(
                'input' => $input,
                'options' => $options,
                'pdoTools' => $pdo,
            ));

            return !empty($result)
                ? $result
                : $input;
        };
    }

}