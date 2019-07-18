<?php
require_once "Creature.php";
require_once "IWork.php";

class Human extends Creature implements IWork
{
    private $work;

    public function noise(){
        echo "Bla bla bla";
        }

    public function legs(){
        echo "2 legs";
    }

    public function setWork($work){
        $this->work = $work;
        echo $this->work;
    }
    public function showObject(){
        $object["name"] = $this->name; 
        $object["color"] = $this->color;
        return $object;
    }
    public function __toString() {
        return "My name is: {$this->name} and i'm {$this->color} \n";
      }
}