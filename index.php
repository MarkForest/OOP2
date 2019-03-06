<?php

include_once 'abstract.php';
use app\costyan\Rectangle;



$figures = [];
$figures[] = new Rectangle(100, 200, 300, 300);
$figures[] = new Rectangle(200, 300, 700, 600);
//$figures[] = Point();
$totalArea = 0;
foreach ($figures as $item) {
    $totalArea += $item->Area();
}
echo "<h1>Total Area = $totalArea</h1>";

//serialize
echo serialize($figures[0]);

file_put_contents('data.txt', serialize($figures[0]));