<?php 
require_once "data/Zero.php";


$zero = new Zero();
$zero ->firstName = "Muhammad". PHP_EOL;
$zero -> lastName = "Farabie" . PHP_EOL;
$zero->address = "Talang Kering" . PHP_EOL;


echo "FirstName : $zero->firstName" . PHP_EOL;
echo "LastName : $zero->lastName" . PHP_EOL;
echo "Address : $zero->address" . PHP_EOL;


$zero->sayHello("Abie", "Farabie");
Zero::sayHello("Farabie", "Arguments");
// echo $zero->firstName . PHP_EOL;
// echo $zero->middleName = "Abie" . PHP_EOL;
// unset($zero->firstName);


?>