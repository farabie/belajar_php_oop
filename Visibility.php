<?php

require_once('data/Product.php');

// use Data\Product;

$product = new Product("Samsul", 1000000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

// $product->name = "Abie"; //Ini error karena properties nya itu private
// $product->price = 10;  //Ini error juga

?>