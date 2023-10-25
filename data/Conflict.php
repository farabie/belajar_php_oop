<?php

namespace Data\One {
    class Conflict {
        var string $name;
        
        function sayHello (?string $name) {
            echo "Halo Conflict data one $name, my name is $this->name" . PHP_EOL;
        }
    }
}



//Error karena dia nama class sama
// class Conflict {}	
namespace Data\Two {
    class Conflict {
        var string $name;
        
        function sayHello (?string $name) {
            echo "Halo Conflict data two $name, my name is $this->name" . PHP_EOL;
        }
    }
}