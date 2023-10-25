<?php

require_once('data/Manager.php');

$manager = new Manager();
$manager->name = 'Amb';
$manager->sayHello("Manager");

$vp = new VicePresident();
$vp->name = "Vice President Boss";
$vp->sayHello("Bawahan boss");

?>