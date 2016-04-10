<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
    'header_text' => array(
	    'type'  => 'text',
	    'value' => 'default value',
	    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
	    'label' => __('Header text', '{domain}'),
	    'desc'  => __('Description', '{domain}'),
	    'help'  => __('Help tip', '{domain}'),
	),
	'footer_text' => array(
	    'type'   => 'wp-editor',
	    'teeny'  => true,
	    'reinit' => true,
	    'label'  => __( 'Footer Text', 'fw' ),
	    'desc'   => __( 'Enter some content for this texblock', 'fw' )
    ),
    'bg-color' => array(
    'type'  => 'color-picker',
    'value' => '#FF0000',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    // palette colors array
    'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
    'label' => __('Label', '{domain}'),
    'desc'  => __('Description', '{domain}'),
    'help'  => __('Help tip', '{domain}'),
 ),
);