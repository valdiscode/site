<!DOCTYPE html>
<meta charset="utf-8">

<?php
// Отправка почты на email 

$_message = "Это самое простое сообщение";
$to = "lebed8989@gmail.com";
$from = "lebed8989@mail.ru";
$subject = "Тема сообщения";
$subject = "=?utf-8?B?".  base64_encode($subject)."?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
mail($to, $subject, $_message, $headers);