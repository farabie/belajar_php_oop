<?php 
namespace Data;

require_once "Animals.php";

interface AnimalShelter {
    function adopt(string $name): Animals;
}

//Inilah yang dinamakan coviarence
//Covariance itu memungkinkan kita mengo override return function yang diparent dengan return value lebih specifict
class CatShelter implements AnimalShelter {
    public function adopt(string $name): Cat {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}


?>