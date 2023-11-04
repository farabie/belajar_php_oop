<?php
require_once("data/Animals.php");
require_once("data/AnimalShelter.php");
require_once("data/Food.php");


$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Cembul");
$cat->eat(new \Data\Food());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Blacky");
$dog->eat(new \Data\AnimalFood());


?>