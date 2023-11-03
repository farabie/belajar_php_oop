<?php

interface HelloWorld
{
    function sayHello(): void;
}

// class SayHelloWorld implements HelloWorld
// {
//     public function sayHello(): void
//     {
//         echo "SayHello World" . PHP_EOL;
//     }
// }

//Ini merupakan penerapan dari anonymous class
//Untuk menambahkan constructornya di class nya
$sayHelloworld = new class("Farabie") implements HelloWorld {
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$sayHelloworld->sayHello();

    ?>