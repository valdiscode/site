<!DOCTYPE html>
<meta charset="utf-8">

<?php

//Работа с сессиями $_SESSION 

//setcookie("num", 10);
//echo $_COOKIE["num"];

session_start();
$num = (isset ($_SESSION["num"])) ? $_SESSION["num"] : 0;
$num++;
$_SESSION["num"] = $num;
//setcookie("num", $num, time () + 4);
echo "Пользователь обновил страничку $num раз";

session_destroy();