<?php 

$array = [
    "firstName" => "Muhammad",
    "middleName"=> "Abie",
    "lastName"  => "Farabie",
];

// var_dump($array);

$object = (object)$array;

//Maka ini akan dikonversi menjadi stdclass (object kosong)
echo $object->firstName. PHP_EOL;
echo $object->middleName . PHP_EOL;
echo $object->lastName . PHP_EOL;
//Maka dia bisa memanggil array tersebut menjadi object
var_dump($object);

//Ataupun sebaliknya kita bisa mengubah dari object ke array
$arrayLagi = (array)$object;
//Ini tipenya jadi array
var_dump($arrayLagi);


require_once 'data/Person.php';

$person = new Person("Muhammad", "Pematang Gubernur", );

$arrayPerson = (array)$person;
var_dump($arrayPerson);
?>