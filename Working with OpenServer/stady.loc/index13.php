<!DOCTYPE html>
<meta charset="utf-8">

<?php

// Циклы For, While and Do While

/*
for ($i = 100; $i >= 80; $i -=2) {
    if($i % 5 == 0) continue;
    if($i <= 87) break;
    echo "Цикл под номером № $i<br>";
}

echo "<br>";

$x = 1;

while ($x <= 10) {
    if($x == 7)
        for ($y = 0; $y < 5; $y += 3)
        echo "Еще одна итерация - $y<br>";
    echo "Итерация под номером № $x<br>";
    $x++;
}

echo "<br>";

$z = 10;

do {
    echo"Операция выполнилась только один раз!";
   $z++; 
} while ($z < 5);
 * 
 */

// Функции
/*
function printWords($word, $x, $y) {
   $word = math ($x, $y);
    echo $word;
}

function math ($first, $second) {
   $summa = $first + $second;
   return $summa;
}

$x = 12;
$y = 35;

printWords($sum, $x, $y);
 * 
 */

// Массивы элементов
// а также ассоциативные массивы (цикл foreach)
/*
$array = array (12, -3.25, "String", false);
echo $array[1];
$array[1] = "String";
$array[2] = 4.25;
echo "<br>".$array[1]."<br>".$array[2]
 * 
 */

// Двумерные масивы
/*
$array = array (array (12, 4.46, "string", true), array ("Example"), array (45, "strong"));

#echo $array [0][2];

for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count ($array[$i]); $j++) {
        echo $array[$i][$j]." ";
    }
    echo "<br>";
}
 * 
 */

// Область видимости переменных

/*
 * Глобальные 
 * Локальные
 * Статические переменные
 */












