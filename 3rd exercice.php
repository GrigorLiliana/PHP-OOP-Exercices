<?php
require_once 'inc/Equipment.php';

define('ORC', "Orc");
define('HUMAN', "Humans");
define('ELVES', "Elves");

class Character
{
	private $type = [ORC, HUMAN, ELVES];
	public $health = 100;
	public $attack = 10;
	public $defence = 5;
    public $war_cry = "Attaaaaaaaack!";
    public $inventory = [];
    


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

    }//end construct
    
    

public function addInventory($equip){
 
    
    if(count($this->inventory) < 4){
       $sword = 0;
        foreach($this->inventory as $equip){
            if($equip->getType() === "sword"){
             $swords++;
               
               if($swords=2){
                   echo "you can't add more swords";
               }else{
                $this->inventory[] = $equip;
               }
           }
        }
    }else{
        echo "<strong style='color:red'>You can't add mor objects</strong>";
    

    
    }//end of foreach
        
}//end of function

public function removeInventory(){
$this->inventory = null;
}
public function displayInventory(){
 if($this->inventory){
     echo"<h1> Check my equipment</h1>";
     var_dump($this->inventory);
 }else{
    echo "Not equipaded";
 }
}

}//class end



// tests
//create one equipment */

$equipOne = new equipment("nif", "Death Sword", 10, 0, 0);
var_dump($equipOne);
$equipTwo = new equipment("sword", "Test Equipment Two", 5, 1, 2);

$equipThree = new equipment("sword", "Test Equipment Three", 5, 1, 2);

$testFour = new equipment("sword", "Test Equipment Four", 5, 1, 2);

$testFive = new equipment("armor", "Test Equipment Five", 5, 1, 2);

//create one character */

$orc = new Character('Orc');

//equip the character
$orc->addInventory($equipOne);
$orc->addInventory($equipTwo);
$orc->addInventory($equipThree);
$orc->addInventory($testFour);
$orc->addInventory($testFour);
$orc->displayInventory();
echo "<h1> Orc Character</h1>";
var_dump($orc);



