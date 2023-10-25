<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }


    function sayHello(string $name): void
    {

        echo "Halo $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    //Melakukan deklrasi ulang terhadap kelas child

    public function __construct(string $name = "") {
        parent::__construct($name, "VP"); //Tidak wajib tapi direkomendasikan
    }

    function sayHello(string $name): void
    {
        echo "Halo $name, my name vp $this->name" . PHP_EOL;
    }
}