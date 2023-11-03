<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Abie";
$student1->value = 5;

$student1("Abie", true, 10, 10.5);


?>