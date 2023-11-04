<?php

use Data\LoginRequest;

require_once "data/LoginRequest.php";
require_once "helper/ValidationRequest.php";
require_once "exception/ValidationException.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "   ";
$loginRequest->password = "   ";


try {
    validateLoginRequest($loginRequest);
    echo "Valid" . PHP_EOL;
} catch (ValidationException | Exception $exception) {

    //Sebagai string
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());
}
// Block finally adalah block dimana akan selalu dieksekusi baik itu exception ataupun tidak
finally {
    echo "Error Tidak error tetap dipanggil" . PHP_EOL;
}

// catch (Exception $exception) {
//     echo "Error : {$exception->getMessage()}" . PHP_EOL;
// }

?>