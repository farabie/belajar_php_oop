<?php 

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Abie";
$student1->value = 200;


$student2 = new Student();
$student2->id = "1";
$student2->name = "Abie";
$student2->value = 200;

//Membandingkan Propertinya saja
var_dump($student1 == $student2);

//Karena dia membandingkan identitynya jadi dianggap bahwa student 1 dan student2 itu object yang berbeda
//dan juga tempat penyimpanan untuk memorinya itu berbeda
var_dump($student1 === $student2);
?>