<?php
require_once 'inc/Equipment.php';

define('ORC', "Orc");
define('HUMAN', "Humans");
define('ELVES', "Elves");

class Character
{
	private $type = [ORC, HUMAN, ELVES];
	public $name;
	public $health = 100;
	public $attack = 10;
	public $defence = 5;
    public $war_cry = "Attaaaaaaaack!";
    public $inventory = [];
    public $i = 1;


	public function __construct($type){
		
		if(!in_array($type, $this->type)){
		echo	"destroing invalid object";
		$this->__destruct();
		}else{
        $this->type = $type;
        }
		

		if($this->type = ORC){
        $this->attack += 2;
        $this->defence += 2;
        $this->health -= 10;
        $this->war_cry = "wwouogrouroulou mlll !!";
        }
        
		if($this->type == HUMAN){
		echo "human";
        }
        
		if($this->type = ELVES){
            $this->attack -= 3;
            $this->defence -= 3;
            $this->health -= 10;
		}
    }
    
    

public function addInventory($equip){
    $swords = 0;
    foreach($this->inventory as $key => $value){
       
    if(count($this->inventory == 4)){
        echo "You can't add mor objects";
    }else if($value->type == "armor"){

    echo "you can't add more armor";

    }else if($value->type =="swords"){
        $swords++;
        if($swords==2){
            echo "you can't add more swords";
        }
    }else{
        $key[$this->i] = $equip;
        $this->i ++;
        }
    }//end of foreach
        
}//end of function

public function removeInventory($equip){
$this->equipment = null;
}
public function displayInventory(){
 if($this->equipment){
     echo $this->equipment;
 }else{
    echo "Not equipaded";
 }
}

}//construct end

// tests
$sword = new equipment("nif", "Death Sword", "desc", 10, 0, 0);
$orc = new Character('Orc');

$orc->addInventory($sword);
var_dump($orc);