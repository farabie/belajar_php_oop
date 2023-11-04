<?php 
require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";

use Data\LoginRequest;

function validateLoginRequest(LoginRequest $loginRequest) {
    if(!isset($loginRequest->username)) {
        throw new ValidationException("Username is null");
    }else if(!isset($loginRequest->password)) {
        throw new ValidationException("Password is null");
    }else if (trim($loginRequest->username) == "") {
        throw new Exception("Username is blank");
    }else if (trim($loginRequest->password) == "") {
        throw new Exception("Password is blank");
    }
}
?>