<?php

class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Halo $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    //Melakukan deklrasi ulang terhadap kelas child
    function sayHello(string $name): void
    {
        echo "Halo $name, my name vp $this->name" . PHP_EOL;
    }
}