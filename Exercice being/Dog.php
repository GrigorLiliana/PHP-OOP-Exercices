<?php

require_once "Animal.php";

class Dog extends Animal
{
    /*public function __construct($name, $sex, $color)
    {
        parent::__construct($name, $sex, $color);
        $this->speaks = "AO AO AO";
    }*/
    public function noise(){
        echo "AO AO AO";
        }
}


