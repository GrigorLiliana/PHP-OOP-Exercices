<?php
class equipment{
public $type = ['armor', 'sword', 'nif'];
public $description;
public $health;
public $attack;
public $defence;

public function __construct($type, $description, $health, $attack, $defence){
		
    if(!in_array($type, $this->type)){
    echo	"destroing invalid object";
    $this->__destruct();
    }else{
    $this->type = $type;
    $this->description = $description;
    $this->health = $health;
    $this->attack = $attack; 
    $this->defence = $defence;
    }
}//construct end

public function __toString()
{
$string = 'Desc : ' . $this->type . "<br>";
$string .= 'Type : ' . $this->description . "<br>";
return $string;
}

public function getType(){
    return $this->type;
}

}//class end