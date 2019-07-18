<?php

namespace MyProject\Flowers;


class User
{
    private $email;
    private $id;

    public function __construct($login, $id){
        $this->email = $login;
        $this->id = $id;
    }

    public function getMail(){
        return $this->email;
    }
    public function getId(){
        return $this->id;
    }

}