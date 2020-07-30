<?php

class Frog extends Animal {
    public $legs = 4;
    public function jump(){
        echo "hop hop";
    }
    public function get_leg(){
        echo $this->legs;
    }
}

?>