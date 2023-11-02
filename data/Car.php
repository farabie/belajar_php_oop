<?php

namespace Data;

//Secara otomatis interface itu class dan functionnya abstract
interface Car
{
    function drive(): void;

    function getTired(): int;
}

class Suzuki implements Car
{
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