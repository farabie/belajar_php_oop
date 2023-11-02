<?php 
require_once('data/SayGoodBye.php');

use Data\Traits\{Person, HasName};


$person = new Person();
$person->goodbye("Budi");
$person->hello("Farel");

$person->name = "Abie";
$person->run();

var_dump($person);




?>