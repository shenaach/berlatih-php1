<?php
//$bool = false;
class Animal{
    //public $sheep;
    public $cold_blooded = false;
    public $legs = 2;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName(){
        echo $this->name;
    }
    public function getLegs(){
        echo $this->legs;
    }
    public function set_leg($legs){
        echo $this->legs =$legs;
    }
    public function get_cold_blooded(){
        echo $this->cold_blooded;
    }
}

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>