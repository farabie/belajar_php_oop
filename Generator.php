<?php

//Ini menggunakan iterator
function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 0; $i < $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}


foreach (getGenap(100) as $value){
    echo "Genap: $value" . PHP_EOL;
}

//Ini menggunakan generator
//Jadi dia lebih simple dibanding menggunakan iterator
//Karena tidak perlu return lagi arrayIteratornya dan tidak perlu
//Membuat arraynya
function getGanjil(int $max): Iterator
{
    for ($i = 0; $i < $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}


foreach (getGanjil(100) as $value) {
    echo "Ganjil: $value" . PHP_EOL;
}

?>