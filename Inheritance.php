<?php

require_once('data/Manager.php');

$manager = new Manager();
$manager->name = "Abie";
$manager->sayHello("Laron");

$vp = new VicePresident();
$vp->name = "Abie Vice Precident";
$vp->sayHello("Kutu");
?>