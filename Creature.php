<?php

abstract class  Creature
{
    protected $color;
    protected $sex;
    protected $name;


    public function __construct($name, $sex, $color){
        $this->name = $name;
        $this->sex = $sex;
        $this->color = $color;
    }

    abstract public function legs();
    abstract public function noise();

}