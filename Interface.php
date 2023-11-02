<?php 

require_once('data/Car.php');

use Data\{Suzuki};


$suzuki = new Suzuki();
$suzuki->drive();

echo "Suzuki mempunyai roda {$suzuki->getTired()}" . PHP_EOL;

?>