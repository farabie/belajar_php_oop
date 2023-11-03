<?php 

class Student {
    public string $id;
    public string $name;
    public int $value;

    private string $sample;

    public function setSample(string $sample): void {
        $this->sample = $sample;
    }

    public function __toString():string {
        return "Student id:$this->id, name:$this->name, value: $this->value". PHP_EOL;
    }

    public function __invoke(... $arguments):void {
        $join = join(',', $arguments);
        echo "Invoke Student with Arguments $join" . PHP_EOL;
    }

    public function __debugInfo():array {
        return [
            "id" => $this->id,
            "name"=> $this->name,
            "value"=> $this->value,
            "author" => "Muhammad Farabie",
            "place" => "Dari Rumah"
        ];
    }

    //Kita bisa juga jika tidak ingin mengcloning semua atau ada aturan
    //Beberapa properties saja yang bisa di clone itu dengan cara membuat function __clone
    public function __clone() {
        //Fungsi untuk menghapus
        unset($this->sample);
    }
}

?>