<?php

require_once('data/Person.php');

$person = new Person();
$person->name = "Muhammad Farabie";
$person->address = "Bengkulu";
$person->country = "Indonesia";

$person->sayHello("Abie");

echo "Name: {$person->name}" . PHP_EOL;
echo "Address: {$person->address}" . PHP_EOL;
echo "Country: {$person->country}" . PHP_EOL;
// echo "SayHello: {$person->country}" . PHP_EOL;

?>