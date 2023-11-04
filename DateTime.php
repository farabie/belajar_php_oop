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
//Cara untuk mengubah date time zonenya tapi harus mengubah php init
var_dump($dateTime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Dubai"));
var_dump($now);

//Format DateTime biasnya digunakan untuk menampiluasi cara menampilkan date time
//Dalam bentuk string format waktu biasanya ini berguna untuk ditampilkan di android
$formatDateTime = new DateTime();
$formatDateTime->setTimezone(new DateTimeZone("Asia/Dubai"));

//Parse Date Time
//Untuk memparsing string menjadi DateTime dengan format yang kita inginkan
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2005-10-12 11:11:11", new DateTimeZone("Asia/Dubai"));
//Untuk mengecek apakah formatnya benar atau salah maka
if($date) {
    var_dump($date);
}else {
    echo "Format Salah";
}



$string = $formatDateTime->format("Y-m-d H:i:s");
echo "Waktu Saat ini : $string" . PHP_EOL;


?>