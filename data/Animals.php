<?php

namespace Data;
require_once "Food.php";

abstract class Animals
{
    public string $name;
    public abstract function run(): void;

    public abstract function eat(AnimalFood $animalFood): void;
}

class Dog extends Animals
{
    public function run():void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood):void {
        echo "Dog is eating" . PHP_EOL;
    }
}

class Cat extends Animals
{
    public function run():void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(Food $food): void
    {
        echo "cat is eating" . PHP_EOL;
    }
}


?>