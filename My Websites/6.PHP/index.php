<?php

 // Udemy.com     
 #echo 'Hello world';

//variable(переменная)
/*
$test="I`m a variable!";
$test2="Me too!";

#echo $test.$test2;

$number=75;

$name="Vladimir";
$a="name";

echo $$a;
 * 
 */


//array(массивы)
/*
$myArray=array("pizza", "chocolate", "coffee");

print_r($myArray);

echo $myArray[5];


echo "<br><br>";


$anotherArray[0]="pizza";
$anotherArray[1]="yoghurt";

print_r($anotherArray);

echo "<br><br>";

$thirdArray=array(
    
    "France" => "French",
    "USA" => "English",
    "Germany" => "German"
);

print_r($thirdArray);

$anotherArray[]="salad";

echo "<br><br>";

print_r($anotherArray);

echo "<br><br>";

unset($thirdArray["Germany"]);

print_r($thirdArray);

echo "<br><br>";

$name="Vladimir";

echo $name;

unset($name);
 * 
 */

// if Statements (если заявления или оператор)
// if-если
// else-иначе,
/*
$number=1;

$otherNumber=2;

$thirdNumber=2;

if ($thirdNumber==$otherNumber OR $number==$otherNumber) {
    echo 'True!';
} else {
    echo "False!";
}
 * 
 */

// For and Foreach (За и по каждому элементу)

/*
$array=array("cat", "dog", "turtle", "kangaroo");

foreach ($array as $key => $value) {
    echo "Key: $key Value: $value <br>";
}

/*
for ($i=500; $i>=100; $i=$i-5) {
    echo $i.'<br>';
}
 * 
 */

// While Loops (В то время как)

$i=0;

$array=array("apple<br>", "banana<br>", "grape");

while ($array[$i]) {
    echo "Key: $i Value: $array[$i]";
    
    $i++;
}