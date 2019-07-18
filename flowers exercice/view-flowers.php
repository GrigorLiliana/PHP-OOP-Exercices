<?php 
session_start();
$userEmail = (explode('@',$_SESSION['user']['mail'])[0]);
echo "<h1>Welcome " . $userEmail . "!</h1>";

require_once "FlowerManager.php";

use Flowers\Db\FlowerManager as FlowerShow;

$newAll = new FlowerShow;
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
<?php for($i=0; $i<count($showAll); $i++){
    $nameFlower = $showAll[$i]["name"];
    $priceFlower = $showAll[$i]["price"];
?>

<h1><?php echo $nameFlower;?></h1>
<strong>Price: <?php echo $priceFlower;?>€</strong>

<?php

}?>
</body>
</html>
