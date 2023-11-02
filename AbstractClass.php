<?php 
require_once('data/Location.php');

use Data\{Location ,City, Province, Country};

// $location = new Location(); //Error 

$city = new City();
var_dump($city);
$province = new Province();
$country = new Country();


?>