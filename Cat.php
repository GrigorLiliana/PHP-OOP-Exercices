<?php

require_once "Animal.php";

class Cat extends animal
{
    /*public function __construct($name, $color, $sex)
    {
        parent::__construct($name, $color, $sex);
        $this->speaks = "Miau Miau Miau";
}*/
public function noise(){
echo "Miau Miau Miau";
}

}