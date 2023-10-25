<?php
use Data\Rectangle;

require_once('data/Shape.php');
use Data\Shape;

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;

//Memanggil parent keyword
echo $rectangle-> getParentCorner() . PHP_EOL;


?>