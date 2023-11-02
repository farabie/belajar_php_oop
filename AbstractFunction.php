<?php 

require_once('data/Animals.php');
use Data\{Animals, Dog, Cat};

//Ini error karena abstract itu tidak bisa di deklarasikan
// $cat = new Animals();
// $cat->name = 'Cembul';
// $cat->run();

$cat = new Cat();
$cat->name = 'Cembul';
$cat->run();

$cat = new Dog();
$cat->name = 'Cireng';
$cat->run();


?>