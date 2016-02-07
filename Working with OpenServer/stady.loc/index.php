<!DOCTYPE html>
<meta charset="utf-8">

<?php

//Гоша Дударь

//Константы
/*
echo PHP_VERSION;

define("PI", 3.14);
echo '<br>';
echo PI;
echo '<br>';
echo defined("PI");
 * 
 */
   
//Арифметические операции
/*
$x = 32;
$y = 22.13;
$summ = $x + $y;
$diff = $x - $y;
$mult = $x * $y;
$dil = $x / $y;
//

echo "Сумма из $x и $y = $summ <br>";
echo "Разница из $x и $y = $diff <br>";
echo "Умножение из $x и $y = $mult <br>";
echo "Деление из $x и $y = $dil <br>";

$z = 12;

//$ostatok = $x % $y;

$q = 400;

$q /= 10;
echo $q;
echo "<br>";
$q = $q + 1;
$q += 1;
$q++;
$q--;
echo $q;
 * 
 */

// Строковые операции
/*
$str_1 = "<br>Первая строка</br> <input type=\"text\">";
$str_2 = "<i>Вторая строка</i>";

echo $str_1." ".$str_2." \" \\";

echo ' \' ';
 * 
 */

//Логические операции

// Логический оператор который возвращает всегда true если
// хоть одно выражение равно true ||
/*
$x = 12;
$y = 34;
$z = 4.25;

$bool_1 = $x != $z;
$bool_2 = $x <= $y;

echo $bool_1."<br>".$bool_2."<br>";

$bool_3 = !($x == $y);

$bool_4 = $x == $y || $z < $y;
$bool_5 = $z != $y && $x < $y;
$bool_6 = $z != $x ^ $y < $z;

echo "<br>".$bool_3."<br>".$bool_4."<br>".$bool_5."<br>".$bool_6;

$bool = !($x != $y && $z < $x) || $x != $y;

echo "<br>$bool = !($x != $y && $z < $x) || $x != $y";
 * 
 */

//Оператор эвивалентности === (проверка на равенство типов
//перменных-углубленная)
/*
$string = "Example";
$num = 0;

$bool_1 = $string == true;

echo "$bool_1 = $string == true;";

$bool_2 = $num == "";
echo "<br>$bool_2 = $num == \"\";<br>";


$bool_ = $string === true;

echo "$bool_3 = $string === true;";

$bool_4 = $num === "";
echo "<br>$bool_4 = $num === \"\";";
 * 
 */

//Условные операторы
/*
$x = 10;
$y = 5;

if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15) 
    echo 'Ура!';
else if ($x == 15 || $y != 7) {
    $num = 5;
    echo "Число № ".$num;
} else if ($x == 15 || $y != 7) {
    $num = 5;
    echo "Число № ".$num;
    
} 
 else {
    echo "<br>";
    echo 'Все сработало';
    
    if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15) 
    echo 'Ура!';
    
    
    $x == $y ? $string = "Да" : $string = "Нет";
    echo "<br>".$string;
}
   
 * 
 */ 

//Оператор Switch () case

$x = 7;

switch ($x) {
    case "Hello" : echo 'Это строковая переменная'; break;
    case 5 : echo 'Эта переменная равна 5'; break;
     case 7 : echo 'Эта переменная равна 7'; break;
      case 12 : echo 'Эта переменная равна 12'; break;
    default : echo 'Эта переменная нам не известна';
}
 

?>