<!DOCTYPE html>
<meta charset="utf-8">

<?php

//Способы подключения PHP файлов
/*
include '';
include_once '';
require '';
require_once '';
 * 
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once 'app/header.php';


include_once 'app/footer.php';