<?php
require_once "IWork.php";

class robot implements IWork
{
private $indentifier;
private $color;
private $work;

public function __construct($id, $color){
$this->indentifier = $id;
$this->color = $color;
}

public function setWork($work){
    $this->work = $work;
    echo $this->work;
}
public function showObject(){
    $robot["id"] = $this->indentifier;
    $robot["color"] = $this->color;
    return $robot;
}
public function __toString() {
    return "My name is: {$this->indentifier} and I'm {$this->color}\n";
  }

}