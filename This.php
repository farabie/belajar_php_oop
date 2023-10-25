<?php

require_once('data/Person.php');

$person = new Person();
$person->name = "Muhammad Farabie";
$person->address = "Bengkulu";
$person->country = "Indonesia";

$person->sayHello("Abie");

$person2 = new Person();
$person->sayHello(null); //Ini kondisi jika null

?>