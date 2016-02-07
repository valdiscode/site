<!DOCTYPE html>
<meta charset="utf-8">

<?php

// строковые функции
/*
$string = "This is example!";
echo strlen ($string)."<br>";
echo strpos($string, "T")."<br>";

if (strpos ($string, "T") === false)    echo "T не найдено!";
else    echo "T найдено";

echo "<br>".substr($string, 3, -2)."<br>";
echo str_replace(array("is", "ple"), array("abc", "123"), $string)."<br>";

$str = "<b>ХАХА, жирный шрифт</b>";

echo htmlspecialchars ($str);

echo "<br>".  strtolower($string)."<br>".strtoupper($string)."<br>";

echo md5("123")."<br>";

echo trim("    string   fs  irtr  ");
 * 
 */

// Функции для работы с массивами

$array = array (12, 17, 5, 23, 56);

echo count($array)."<br>";
sort ($array);
print_r ($array);
echo "<br>";
rsort ($array);
print_r ($array);
echo "<br>";
asort ($array);
print_r ($array);
echo "<br>";

$alist = array("123" => 23, "12" => 45, "c" => 32);
arsort ($alist);
print_r ($alist);
echo "<br>";

// сортируем ключи по убыванию или возрастанию
ksort ($alist);
print_r ($alist);
echo "<br>";

//перемешиваем элементы в самом массиве

shuffle ($array);
print_r ($array);
echo "<br>";


echo in_array(12, $array);
echo "<br>";

//unset($array[0]);

$arr_1 = array (10, 2);
$arr_2 = array (4, 5, 7);
$array_3 = array_merge($arr_1, $arr_2);
print_r ($array_3);
echo "<br>";

$arrDone = array (1, 2, 3, 4, 5, 6, 7);
print_r ($arrDone);
echo "<br>";
$arrDone = array_slice($arrDone, 1, -2);
print_r ($arrDone);
 




