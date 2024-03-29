<?php

//Untuk best practice dari class yaitu menggunakan camelcase
class Person
    //Fields/Properties/Attributes adalah data yang bisa kita sisipkan dalam code
//Sebelum memasukan data di fields kita harus mendeklarasikan object
{
    //Membuat constant
    const AUTHOR = "Farabie";
    //Membuat fields
    var string $name; //Properties dengan type
    //Dengan memberi ? (tanda tanya) didepan type data
    var ?string $address = null; //Nullable properties 
    var string $country = "Indonesia"; //Properties default value

    //Membuat Constructor
    public function __construct(string $name, ?string $address) {
        $this->name = $name; //this yang ada di object diubah ke name yang ada di paramater
        $this->address = $address; //this address yang ada diobject diubah ke adress yang ada di paramter 
    }

    function __destruct() {
        echo "Object person {$this->name} is destroyed" .PHP_EOL;
    }

    function sayHello(?string $name)
    {
        if(is_null($name)) {
            echo "Hi, my name is {$this->name}" .PHP_EOL; //This untuk mengakses object saat ini
        }else {
            echo "Hello $name, my name is {$this->name}" .PHP_EOL;
        }
    }

    //Harusnya kan kayak Person::AUTHOR untuk akses constant
    //Karena dia didalam classnya sendiri maka Person itu diganti jadi self
    function info() {
        echo "AUTHOR: " . self::AUTHOR . PHP_EOL;
    }
}