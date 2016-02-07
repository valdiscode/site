<!DOCTYPE html>
<meta charset="utf-8">

<?php

// математические функции

echo M_PI."<br>".M_E."<br>";
$x = -15;
echo abs ($x)."<br>";
$y = 49.8473434;
echo round($y, 3)."<br>";
echo ceil ($y)."<br>";
echo floor ($y)."<br>";

echo mt_rand(1, 20)."<br>";
echo min (12, 23, -2, -5, 19, -4, 0)."<br>";
echo max (12, 23, -2, -5, 19, -4, 0)."<br>";

$z=1;
echo sin($z)."<br>";
echo cos($z)."<br>";
