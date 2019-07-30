<?php  

  $i=0;
  
    while($i<3){
        
    $myFile = readline('Enter the name of the file to search:');
    if(file_exists($myFile)){
        echo file_get_contents($myFile);
        break;
    }else{
        $i++; 
        if($i==3)echo "you don't have more changes \n";
        else{
            echo "wrong name you have " . (3 - $i) . "more changes to try \n";
            }
        }
    }
    

