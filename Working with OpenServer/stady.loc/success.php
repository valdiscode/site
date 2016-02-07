<!DOCTYPE html>
<meta charset="utf-8">

<?php
    session_start();
    if($_GET["send"] == 1)
    echo "Вы успешно отправили сообщение на email ".$_SESSION["to"];
?>