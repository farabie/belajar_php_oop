<?php

use Data\LoginRequest;

require_once "data/LoginRequest.php";
require_once "helper/ValidationRequest.php";
require_once "exception/ValidationException.php";

$loginRequest = new LoginRequest();


validateLoginRequest($loginRequest);
echo "Valid" . PHP_EOL;

?>