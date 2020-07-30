<?php

class Animal {
    public  $legs = 2,
            $cold_blooded = false,
            $name;

    public function __construct ($name) {
        $this->name = $name;
    }

    public function get_name(){
        echo $this->name;
    }

    public function get_legs(){
        echo $this->legs;
    }

    public function get_cold_blooded(){
        echo ($this->cold_blooded) ? "true" : "false" ;
    }
}

?>