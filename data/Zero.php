<?php

class Zero
{
    private array $properties = [];
    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments) {
        $join = join(", ", $arguments);
        echo "Call Function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments) {
        $join = join(", ", $arguments);
        echo "Call Static Function $name with arguments $join" . PHP_EOL;
    }
}


?>