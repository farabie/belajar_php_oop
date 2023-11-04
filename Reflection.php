<?php

use Data\LoginRequest;

require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";
require_once "exception/ValidationException.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "abie";
$loginRequest->password = "abie";


// ValidationUtil::validate($loginRequest);
// ValidationUtil::validateReflection($loginRequest);


class RegitserUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;


}

$register = new RegitserUserRequest();
$register->name = "Abie";

ValidationUtil::validateReflection($register);
?>