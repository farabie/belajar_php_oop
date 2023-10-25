<?php

require_once('data/Person.php');

$person = new Person();

$person->info();

define("APPLICATION","belajar php oop");
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

//Mengakses constant di class
echo Person::AUTHOR . PHP_EOL;

?>