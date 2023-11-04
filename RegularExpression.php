<?php 

$matches = [];
//Kita akan mencari dengan kata2 dibawah ini untuk yang /i itu fungsinya tidak peduli di case sensitif
//$pattern $subject
//Kalau tidak pakai bool maka yang di matches nya itu int atau jumlah yang matchnya
$result = (bool)preg_match_all("/far|bie|muh/i", "Muhammad Farabie", $matches);

var_dump($result);
var_dump($matches);

//$pattern, $replacement(diganti apa), $subject
$sensor = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat");
var_dump($sensor);

//Split
$split = preg_split("/[\s,-]/", "Muhammad Farabie, Belajar-Coding");
var_dump($split);



?>