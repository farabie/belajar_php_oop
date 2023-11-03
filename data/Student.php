<?php 

class Student {
    public string $id;
    public string $name;
    public int $value;

    private string $sample;

    public function setSample(string $sample): void {
        $this->sample = $sample;
    }

    //Kita bisa juga jika tidak ingin mengcloning semua atau ada aturan
    //Beberapa properties saja yang bisa di clone itu dengan cara membuat function __clone
    public function __clone() {
        //Fungsi untuk menghapus
        unset($this->sample);
    }
}

?>