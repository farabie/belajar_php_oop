<?php
require_once("data/Animals.php");
require_once("data/AnimalShelter.php");


$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Cembul");
var_dump($cat);

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Blacky");


?>