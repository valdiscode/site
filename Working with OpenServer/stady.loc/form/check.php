<!DOCTYPE html>
<meta charset="utf-8">
<?php

//print_r($_GET);

if($_POST["name"] == "")
    echo "Введите имя. <a href='/'>Исправить</a>";
else
header("Location:index-form.php");