<?php 

$matches = [];
//Kita akan mencari dengan kata2 dibawah ini untuk yang /i itu fungsinya tidak peduli di case sensitif
$result = (bool)preg_match_all("/far|bie|muh/i", "Muhammad Farabie", $matches);

var_dump($result);
var_dump($matches);



?>