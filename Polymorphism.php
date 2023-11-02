<?php 

require_once('data/Programmer.php');

//Polymorphism kempuan sebuah object berubah bentuk menjadi bentuk yang lain
//Jadi untuk polymorphism kita menggunakan class tersebut termasuk juga class turunannya
$company = new Company();
$company->programmer = new Programmer("Farabie");
var_dump($company);
$company ->programmer = new FrontendProgrammer("Abie");
var_dump($company);
$company ->programmer = new BackendProgrammer("Farel");

sayHelloProgrammer(new Programmer("Abie"));
sayHelloProgrammer(new FrontendProgrammer("Farabie"));
sayHelloProgrammer(new BackendProgrammer("Farel"));

?>