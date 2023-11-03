<?php

class SocialMedia
{
    public string $name;
}


class Facebook extends SocialMedia
{
    final public function login(string $username, string $password):bool {
        return true;
    }
}

//Ini error karena untuk functionnya sendiri itu sudah final jadi tidak bisa di override
// class FakeFacebook extends Facebook {
//     public function login(string $username, string $password):void {}
// }

//Maka ini akan error karena class yang final itu tidka bisa diturunkan
// class FakeFacebook extends Facebook {}

?>