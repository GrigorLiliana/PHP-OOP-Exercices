<?php

namespace Flowers\Db;
use PDO;
class FlowerManager
{
    public function findAll(){
        require_once "db-conection.php";
        $queryFlowers = "SELECT * FROM flowers";
        $results = $pdo->query( $queryFlowers);
    
        if($results){
        
        $i=0;
      
        while($row = $results->fetch(PDO::FETCH_ASSOC)){
            $flowers[$i]["name"] = $row['flower_name'];
            $flowers[$i]["price"] = $row["flower_price"]; 
            $flowers[$i]["link"] = $row["flower_link"];
            $flowers[$i]["id"] = $row["flower_id"];
            $i++;
        }
        
        /*
        $queryFlowers = "SELECT * FROM flowers";
        
        $flowersToShow = mysqli_query($conn, $queryFlowers);
        if($flowersToShow){                      
            $i=0;
            while($getFlowers= mysqli_fetch_assoc($flowersToShow)){
                $flowers[$i]["name"] = $getFlowers['flower_name'];
                $flowers[$i]["price"] = $getFlowers["flower_price"]; 
                $flowers[$i]["link"] = $getFlowers["flower_link"];
                $flowers[$i]["id"] = $getFlowers["flower_id"];
                $i++;
            }*/ 
            return $flowers;
        }else{
            echo "Sorry, we don't have any flowers to show you :(";
            return false;
        }

    }
}