<?php 

class SocialMedia {
    public string $name;
}


final class Facebook extends SocialMedia {}

//Maka ini akan error karena class yang final itu tidka bisa diturunkan
// class FakeFacebook extends Facebook {}

?>