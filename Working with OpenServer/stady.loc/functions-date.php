<!DOCTYPE html>
<meta charset="utf-8">

<?php

//функции даты

$start = microtime(true);
        echo time ()."<br>";

echo microtime(true)."<br>";

echo "Время работы скрипта".(microtime(TRUE) - $start)."секунд<br>";

$time = mktime (12, 35, 23, 12, 7, 2007);

echo date ("Y-m-d H:i:s", $time)."<br>";

$array = getdate($time);
print_r($array);

echo "<br>".checkdate(2, 29, 2012);
