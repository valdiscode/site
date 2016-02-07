<!DOCTYPE html>
<meta charset="utf-8">

<?php
/*
// Создание редиректа
header("Location: http://google.com");
exit;
 * 
 */


/*
 *  создаем файл
$file = fopen ("a.txt", "a+t");
fwrite($file, "Example\nText\nNext");
fclose($file);
 * 
 */

$file = fopen ("a.txt", "r+t");
while (!feof($file)) {
    echo fread($file, 1)."<br>";
}

fseek($file, 0);
echo fread($file, 1)."<br>";

fclose($file);

echo "---------------------- <br>";

file_put_contents("c.txt", "TEST test Test");
echo file_get_contents("c.txt")."<br>";
echo file_exists("a.txt")."<br>";
echo filesize("c.txt")."<br>";

rename("c.txt", "b.txt");
unlink("b.txt");


//Права доступа
echo __FILE__;
echo "<br>";
echo fileperms(__FILE__);
#изменяем права доступа
chmod(__FILE__, 0777);


// phpinfo() и $_SERVER --узнаем IPI пользователя

echo $_SERVER["REMOTE_ADDR"];
phpinfo();



