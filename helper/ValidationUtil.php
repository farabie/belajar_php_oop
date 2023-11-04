<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";

use Data\LoginRequest;

class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username is not set");
        } else if (!isset($request->password)) {
            throw new ValidationException("Password is not set");
        } else if (is_null($request->username)) {
            throw new ValidationException("Username is null");
        } else if (is_null($request->password)) {
            throw new ValidationException("Password is null");
        }
    }

    //Reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
    //Jadi reflection ini juga berguna untuk validasi tanpa harus membuat functionnya panjang
    //Kemudian bisa memvalidasi untuk object apapun

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}

?>