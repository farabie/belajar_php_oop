<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Abie";
$student1->value = 5;

//Maka dia akan otomatis berubah ketika kita mengoverride untuk var_dump atau debug infonya
var_dump($student1);

?>