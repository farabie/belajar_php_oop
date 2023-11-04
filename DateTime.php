<?php 

$dateTime = new DateTime();
//Isinya ini untuk object date time adalah waktu saat ini type time zone dan timezone yang digunakan
//Akan mengubah hour/minute/seconds
$dateTime->setTime(10, 10, 10);
//Akan mengubah year/month/date
//Jadi untuk mengubah setTime dan setDate itu harus sekaligus
$dateTime->setDate(2023, 11, 20);
//Ini artinya menambahkan 1 tahun
$dateTime->add(new DateInterval("P1Y"));
//Mengurangi 1 bulan
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
//Ini artinya menggurangi
$dateTime->add($minusOneMonth);

var_dump($dateTime);

?>