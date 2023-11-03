<?php 

class Data implements IteratorAggregate{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";

    protected string $fourth = "Forth";

    //Kalau menggunakan iterator kita bisa menggambil datanya yang private sekalipun
    //Tetap kita harus mengimplement juga untuk fungsi getIteratornya
    public function getIterator() {
        $array = [
            "first" => $this->first,
            "second"=> $this->second,
            "third"=> $this->third,
            "forth"=> $this->fourth,
        ];
        return new ArrayIterator($array);
    }
}

$data = new Data();

//Kalau misalkan kita menggunakan foreach saja secara otomatis akan mengakse property
//Yang public saja untuk private dan proteced itu tidak bisa
foreach($data as $key => $value){
    echo "$key : $value" . PHP_EOL;
}


?>