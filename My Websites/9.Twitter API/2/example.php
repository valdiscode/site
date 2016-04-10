<?php

require_once "twitteroauth/twitteroauth.php";

define("CONSUMER_KEY", "iP9abrIF5WmlYz1leT16wRQp7");
define("CONSUMER_SECRET", "WcCVOq9PPnCRxLjtJDJRX6gW9NL8JKWQTIYH6XTr4DLsAfBc3S");
define("OAUTH_TOKEN", "3655117216-kLVxFh5ZyLpXRs12S87fcfXCZFxBW7B6G6kmthl");
define("OAUTH_SECRET", "0LwGKm6c48MkCct6A2G6Csls93MCZe5gcnQL8s9IWBCJ7");

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_SECRET);
$content = $connection->get('account/verify_credentials');

$connection->post('statuses/update', array('status' => 'Сообщение в Twitter автоматом из PHP :) .'));
    
?>