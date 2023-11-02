<?php 
namespace Data;
class Category {
    private string $name;
    private bool $expensive;
    
    //Fungsi get untuk string
    //Keuntungan dari fungsi getter dan setter adalah kita dapat
    //Menambahkan validasi karena dia di dalam sebuah function
    public function getName(): string {
        return $this->name;
    }
    //Fungsi set untuk string
    public function setName(string $name): void {
        //Validation String
        if(trim($name) != "") {
            $this->name = $name;
        }
    }

    //Fungsi get untuk bool
    public function isExpensive(): bool {
        return $this->expensive;
    }
    //Fungsi set untuk bool
    public function setExpensive(bool $expensive): void {
        $this->expensive = $expensive;
    }


}


?>