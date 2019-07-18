<?php 
session_start();
$userEmail = (explode('@',$_SESSION['user']['mail'])[0]);
echo "<h1 style='margin-top:2rem; font-size:50px; text-align:center; background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
'>Welcome " . $userEmail . "!</h1>";

require_once "FlowerManager.php";

use Flowers\Db\FlowerManager as FlowerShow;

$newAll = new FlowerShow();
$showAll = $newAll->findAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div style="width:800px; margin: 5rem auto; text-align:center; display: flex; justify-content: space-around;">

<?php for($i=0; $i<count($showAll); $i++){
    $nameFlower = $showAll[$i]["name"];
    $priceFlower = $showAll[$i]["price"];
    $linkFlower = $showAll[$i]["link"];
    $idFlower = $showAll[$i]["id"];
?>
<div style="padding:1rem;">
<h2 style="padding:1rem;"><?php echo $nameFlower;?></h2>
<img  width=150 height=150 style="border-radius:50%;" src="<?php echo $linkFlower;?>" alt="<?php echo $nameFlower;?>">
<strong >Price:</strong> <span><?php echo $priceFlower;?>€</span><br>
<a href="view-flowers.php?id=<?php echo $idFlower;?>"> Buy a <?php echo $nameFlower;?></a></div>

<?php

}?>
</div>
</body>
</html>
