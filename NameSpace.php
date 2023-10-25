<?php

require_once('data/Conflict.php');
require_once('data/Helper.php');

//Memebuat object dari namespace
$conflict1 = new \Data\One\Conflict();

$conflict1->name = "Abie";
$conflict1->sayHello("Tissue");


$conflict2 = new \Data\Two\Conflict();
$conflict2->name = "Farel";
$conflict2->sayHello("Botol");

echo Helper\APPLICATION . PHP_EOL;
?>