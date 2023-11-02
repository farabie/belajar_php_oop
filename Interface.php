<?php 

require_once('data/Car.php');

use Data\{Suzuki};


$suzuki = new Suzuki();
$suzuki->drive();
// $suzuki->getBrand();


echo "Nama Brand mobilnya adalah {$suzuki->getBrand()}" . PHP_EOL;
echo "Suzuki mempunyai roda {$suzuki->getTired()}" . PHP_EOL;

?>