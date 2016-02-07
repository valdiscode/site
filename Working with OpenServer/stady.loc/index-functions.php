<!DOCTYPE html>
<meta charset="utf-8">


<?php
// Функции для работы с типами переменных
// isset    -для вывода переменной
// unset - для удаления массива или меременной
// is_numeric -проверяет является ли переменная числом
// is_integer - проверяет является ли функция,переменная целочисленным
// is_double  - переменные с точками
// is_string - 
// is_bool -
// is_scalar --проверяет переменную на является ли она простой
// is_null --
// is_array - пров, является ли переменная массивом
// gettype --


$x=15;

if (isset($x))    echo "Переменная существует";
else    echo "Переменная не существует";
echo "<br>";
unset($x);
if (isset($x))    echo "Переменная существует";
else    echo "Переменная не существует";
echo "<br>";

$x="15";
$bool=false;

$null;

echo "Is Numeric - ".  is_numeric($x)."<br>";
echo "Is Integer - ". is_integer($x)."<br>";
echo "Is Double - ".  is_double($x)."<br>";
echo "Is String - ". is_string($x)."<br>";
echo "Is Boolean - ".  is_bool($bool)."<br>";
echo "Is Scalar - ". is_scalar($bool)."<br>";
echo "Is null - ".  is_null($null)."<br>";
echo "Is array - ". is_array($bool)."<br>";
echo "Is Type - ". gettype($x)."<br>";
echo "Is Type - ". gettype($null)."<br>";
 

