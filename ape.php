<?php

require ('animal.php');

class Ape extends Animal {
    public function yell(){
        echo "Auooo";
    }
}

// $sungokong = new Ape("kera sakti");
// echo $sungokong->legs;
// $sungokong->yell();
?>