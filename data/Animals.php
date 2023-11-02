<?php

namespace Data;

abstract class Animals
{
    public string $name;
    abstract public function run(): void;
}

class Dog extends Animals
{
    public function run():void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}

class Cat extends Animals
{
    public function run():void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}


?>