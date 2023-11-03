<?php 

require_once('helper/MathHelper.php');

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

//Biasanya static digunakan untuk yang variable nya static atau biasanya di helper
//Jadi tidak harus dibuat objectnya terlebih dahulu
$total = MathHelper::sum(10, 20, 30, 40, 50);
echo "Total =  $total" .PHP_EOL;

// $mathHelper = new MathHelper();
// //Tidak bisa diakses karena dia propertinya static
// echo $mathHelper->name . PHP_EOL;



?>