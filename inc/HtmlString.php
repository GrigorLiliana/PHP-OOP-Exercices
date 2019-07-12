<?php 
class HtmlString
{
    private $string;

public function __construct($string){
    $this->string = $string;
}

    public function setString($string){
        $this->string = $string;
    }
    public function getString(){
        return $this->string;
    }

    public function getBoldString(){
        echo '<b>' . $this->string . '</b><br><br>';
    }
    
    public function getItalicString(){
        echo '<i>' . $this->string . '</i><br><br>';
    }
    
    public function getItalicBoldString(){
        echo '<b><i>' . $this->string . '</i></b><br><br>';
    }
}