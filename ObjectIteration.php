<?php 

class Data{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";

    protected string $fourth = "Forth";
}

$data = new Data();

//Kalau misalkan kita menggunakan foreach saja secara otomatis akan mengakse property
//Yang public saja untuk private dan proteced itu tidak bisa
foreach($data as $key => $value){
    echo "$key : $value" . PHP_EOL;
}


?>