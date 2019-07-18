<?php

require_once "Creature.php";

abstract class Animal extends Creature
{
    public function legs(){
        echo "4 legs";
    }
}