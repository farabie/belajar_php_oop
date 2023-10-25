<?php

require_once('data/Person.php');

//Menggunakan Constructor
$abie = new Person("Abie", "Bengkulu");
$abie->country = "Indonesia";

$abie->sayHello("Farabie");
$abie->sayHello(null);

?>