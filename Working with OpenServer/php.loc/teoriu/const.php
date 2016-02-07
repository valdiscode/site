<!DOCTYPE html>
<meta charset="utf-8">

<?php
//Константы

define('MY_FIRST_CONSTANT','1.0');

echo MY_FIRST_CONSTANT.'<br>';

//Волшебные Константы

#echo __LINE__;

class MyClass {
    const MY_CONSTANT = 34;
    
    public function get_my_constant() {
        return self::MY_CONSTANT;
    }
}

$class = new MyClass();
echo $class->get_my_constant();