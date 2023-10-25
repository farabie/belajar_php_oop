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

    function sayHello(?string $name)
    {
        if(is_null($name)) {
            echo "Hi, my name is {$this->name}" .PHP_EOL; //This untuk mengakses object saat ini
        }else {
            echo "Hello $name, my name is {$this->name}" .PHP_EOL;
        }
    }
}