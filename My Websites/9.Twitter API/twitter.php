<?php

session_start();

require_once ("twitteroauth/twitteroauth.php");

$apikey="iP9abrIF5WmlYz1leT16wRQp7";
$apisecret="WcCVOq9PPnCRxLjtJDJRX6gW9NL8JKWQTIYH6XTr4DLsAfBc3S";
$accesstoken="3655117216-kLVxFh5ZyLpXRs12S87fcfXCZFxBW7B6G6kmthl";
$accesssecret="0LwGKm6c48MkCct6A2G6Csls93MCZe5gcnQL8s9IWBCJ7"; 

$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);


$response = $connection->post("https://api.twitter.com/1.1/statuses/update.json", array("status" => "This is a test") );

/*Под проект Twitter Client
 * $response = $connection->post("https://api.twitter.com/1.1/statuses/home_timeline.json?count=3");
 * 
 * foreach ($response as $tweet) {
 *      
 *       $favorites=$tweet->favorite_count;
 * 
 *          if ($favorites>2) {
 *          
 *          $embed = $connection->post("https://api.twitter.com/1.1/statuses/oembed.json?id=".$tweet->id);
 * 
 *          echo $embed->html;
 *      
 *      }
 *  }
 * 
 */

//echo json_encode($tweets);

foreach ($tweets as $twet) {
    
    echo $tweet->text;
    
    echo $tweet->favorite_count;
    
    echo "<br>";
}

?>