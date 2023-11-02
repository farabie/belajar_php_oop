<?php

class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{
}

class Company
{
    var Programmer $programmer;
}

//Mengecek Type Check & Cast
//Untuk mengecek type cast kita bisa menggunakan instance of
function sayHelloProgrammer(Programmer $programmer)
{

    if ($programmer instanceof FrontendProgrammer) {
        echo "Hello FrontendProgramer dengan nama $programmer->name" . PHP_EOL;
    }else if ($programmer instanceof BackendProgrammer ) {
        echo "Hello BackendProgrammer dengan nama $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer ) {
        echo "Hello Programmer dengan nama $programmer->name" .PHP_EOL;
    }
}


?>