<?php
class equipment{
public $type = ['armor', 'sword', 'nif'];
public $name;
public $description;
public $health;
public $attack;
public $defence;

public function __construct($type, $name, $description, $health, $attack, $defence){
		
    if(!in_array($type, $this->type)){
    echo	"destroing invalid object";
    $this->__destruct();
    }else{
    $this->type = $type;
    $this->name = $name;
    $this->description = $description;
    $this->health = $health;
    $this->attack = $attack; 
    $this->defence = $defence;
    }
}//construct end

}