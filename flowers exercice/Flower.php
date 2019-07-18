<?php
namespace Flowers;

class Flower
{
    private $name;
    private $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
}