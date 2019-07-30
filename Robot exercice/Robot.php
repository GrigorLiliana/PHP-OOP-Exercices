<?php

namespace MyProject;


class Robot
{
    private $id;
    private $color;

    public function __construct($id, $color){

        $allColors = ["silver", "grey"];

        if(in_array($color, $allColors) && (strlen($id)>=3 && strlen($id)<=10)){
            $this->color = $color;
            $this->id = $id;
        }else{
            return false;
        }
    }

    public function getColor(){
        return $this->color;
    }
    public function getId(){
        return $this->id;
    }
    public function getInfos(){
        $allProperties["id"] = $this->id;
        $allProperties["color"] = $this->color;
        return $allProperties;
    }
}
?>