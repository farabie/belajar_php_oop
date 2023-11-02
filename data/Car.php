<?php

namespace Data;

//Secara otomatis interface itu class dan functionnya abstract

interface hasBrand
{
    function getBrand(): string;
}

interface isMaintence
{
    function isMaintance(): bool;
}

//Contoh inheritance untuk interface
interface Car extends hasBrand
{
    function drive(): void;

    function getTired(): int;
}

class Suzuki implements Car, isMaintence
{
    public function getBrand(): string {
        return "Suzuki";
    }

    public function isMaintance():bool 
    {
        return false;
    }

    public function drive(): void
    {
        echo "Suzuki melaju" . PHP_EOL;
    }

    public function getTired(): int
    {
        return 4;
    }
}

?>