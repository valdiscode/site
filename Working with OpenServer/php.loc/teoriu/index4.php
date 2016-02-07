<!DOCTYPE html>
<meta charset="utf-8">

<?php

echo '<h1>Привет мир!</h1>';
?>

<h2>Заголовок 2</h2>

<?php
//Коментарий в одну строку
#Комментарий в одну строку

/*
 * Многострочный
 *  комментарий
 */

/*
$reGistr = 'Регистр 1';
$registr = 'Регистр 2';

//$string = $reGistr.' Конкатенация '.$registr;

ECHo $reGistr.' Конкатенация '.$registr;
 * 
 */

error_reporting(E_ALL);

$x = 10;
$y = 11; //Локальная переменная

/*
function test() {
    global $x, $y;
    echo $x.'<br>';
    echo $y;
}
test();
 * 
 */

/*
function test() {
    static $z;
    $z++;
    echo $z.'<br>';
}
test();
test();
test();
test();
 * 
 */

function test() {
    static $z;
    $z++;
    echo $z.'<br>';
}

test();

echo '<pre>';
print_r($GLOBALS);

error_reporting(E_ALL);

$var_1 = 'Переменная 1';
$var_2 = 'Переменная 2';
$array = array('key' => 'value');

echo $var_1;
?>

<?php

error_reporting(E_ALL);

//Вывод информации в PHP
$var_1 = 'Переменная 1';
$var_2 = 'Переменная 2';
$array = array('key' => 'Содержимое параграфа');

#echo $var_1, ' ', $var_2;

#echo("Мы выводим значение переменной: $var_1 Мы выводим значение переменной: $var_2");

#echo ('Выводим: '.$var_1);

$var = 'var_1';

#echo("${$var}");

echo "Значение массива {$array['key']}", " несколько <br>";
print "Значение массива {$array['key']}"."<br>";

?>

<p><?=$array['key']?></p>

<?php

/*
 * Типы данных в PHP
 * 
 * строка - string
 * целое число - integer
 * дробное число - float (double)
 * булевое значение - boolean
 * массивы - array
 * обьекты - object
 * нуль - null
 * ресурс - rescurce
 */

$string = 'Hello World!';
$integer = 0134;
$float = 2.32;
$boolean = false; //true
$array = array("Helo World", $float, $boolean); // Массивы-Одномерные, ассоциативные, многомерные

class User {
    
    public $username = "Владислав";
    
    public function GetUsername() {
        return $this->username;
    }
}

$user = new User;
$username = $user->GetUsername();

$null = null;

$resource = mysqli_connect('localhost', 'root', '');

?>

<pre>
<?=var_dump($integer)?>
</pre>

