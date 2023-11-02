<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodbye(?string $name):void
    {
        if (is_null($name)) {
            echo "Say goodbye name" . PHP_EOL;
        } else {
            echo "Say goodbye $name" . PHP_EOL;
        }
    }
}

trait sayHello
{
    public function hello(?string $name):void
    {
        if (is_null($name)) {
            echo "Say hello name" . PHP_EOL;
        } else {
            echo "Say hello dengan name $name" . PHP_EOL;
        }
    }
}

trait HasName{
    public string $name;
}


class Person
{
    use sayGoodBye, sayHello, HasName;
}


?>