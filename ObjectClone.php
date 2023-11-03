<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Abie";
$student1->value = 100;

$student1->setSample("Sample Student1");

var_dump($student1);

//Jadi dia akan mengcloning semua untuk object dari student1
//Maka dia akan otomatis mengcloning juga untuk yang private
$student2 = clone $student1;
//Maka pada student2 untuk sample dia uninitalized atau tidak di set
var_dump($student2);


//Manual cloning
// $student2 = new Student();
// $student2->id = "1";
// $student2->name = "Abie";
// $student2->value = 100;

?>