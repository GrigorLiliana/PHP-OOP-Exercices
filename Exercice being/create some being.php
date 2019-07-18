<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/80c962dd4c.js"></script>
</head>
<body>
    
<?php
require_once "Dog.php";
require_once "Cat.php";
require_once "Human.php";
require_once "Robot.php";

//test Dog
$dog = new Dog("boby", "boy", "green");
$dog->noise();
var_dump($dog);
?>
<i class="fas fa-dog"></i>
<?php
//test Cat

$cat = new Cat("bicho", "girl", "pink");
$cat->noise();
var_dump($cat);
?>
<i class="fas fa-cat"></i>
<?php

//test Human
$human = new Human("Liliana", "women", "purple");
$human->noise();
var_dump($human);
?>
<i class="fas fa-user"></i>
<?php
$human->setWork("coder");
echo " "
?><i class="fas fa-laptop-code"></i><?php

// test robot
$robot = new Robot(123465, "pink");
var_dump($robot); ;
?>
 <i class="fas fa-robot"></i>
<?php
$robot->setWork("artificial coder");
echo "  ";
?>
 <i class="fas fa-code"></i>

<?php 


for($i=0; $i<=5; $i++){
    $being[] = new Cat("Garfiel$i", "Men", "Black");
    $being[] = new Dog("Boby$i", "Men", "Marron");
    $being[] = new Human("Liliana$i", "Women", "Purple");

    $worker[] = new Human("Liliana$i", "Women", "Purple");
    $worker[] = new Robot($i, "blue");
}
var_dump($worker);

echo "<br><h3>Sound Exercice:</h3><br>";

for($a=0; $a<=10; $a++){
$rand = rand(0,15);

$pick = $being[$rand];
echo ($a+1) . "°Loop: <br>"; 
//echo $pick->name . " does:<br>";
$pick->noise();
echo "<br><hr>";
}

echo "<br><h3>Work Exercice:</h3><br>";

for($b=0; $b<=10; $b++){
    $randb = rand(0,10);
    
    $pickb = $worker[$randb];
    echo ($b+1) . "°Loop: <br>"; 

   $show = $pickb->showObject();
    foreach($show as $key => $value){
        echo "the " . $key . " is " . $value . " and ";
    }
    echo "the work is ";
    $pickb->setWork("artificial coder");
    echo "<br>";
    echo $pickb . "<hr>";
    }

?>
</body>
</html>
