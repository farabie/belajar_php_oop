<?php

use Data\LoginRequest;

require_once "data/LoginRequest.php";
require_once "helper/ValidationRequest.php";
require_once "exception/ValidationException.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "    ";
$loginRequest->password = "    ";


try {
    validateLoginRequest($loginRequest);
echo "Valid" . PHP_EOL;
}catch (ValidationException $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}catch (Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}

?>