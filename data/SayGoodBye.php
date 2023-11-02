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

//Abstract function di trait
trait CanRun {
    public abstract function run(): void;
}

trait HasName{
    public string $name;
}

class ParentPerson {
    //Kalau dia di parent maka akan override trait
    //Kalau dia di child maka traitnya di override oleh child
    public function goodbye(?string $name): void
    {
        echo "Overide trait SayGoodBye" . PHP_EOL;
    }
    public function hello(?string $name): void
    {
        echo "Overide trait SayHello" . PHP_EOL;
    }
}

class Person extends ParentPerson
{
    use sayGoodBye, sayHello, HasName, CanRun {
        //Jadi didalam trait kita dapat override visibilty dari function yang ada di trait
        // hello as private;
        // goodbye as private;
    }

    //Karena dia function abstract jadi kita wajib implementkan
    public function run():void {
        echo "Person {$this->name} is running" . PHP_EOL;
    }

    //Jadi jikalau kita overide traitnya dengan nama function yang sama dengan trait
    //Maka otomatis dia akan override untuk dikelas childnya
    //Beda jika dia di kelas parent
    // public function goodbye(?string $name): void
    // {
    //     echo "Overide trait SayGoodBye" . PHP_EOL;
    // }
}


?>