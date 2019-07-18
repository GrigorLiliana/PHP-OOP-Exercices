<?php

namespace MyProject\Flowers\Db;


require_once "User.php";

use MyProject\Flowers\User;
use PDO;

class UserManager
{

    public function login($login, $password){
        require_once "db-conection.php";

       //* query the data base
       $userQuery = 'SELECT *
       FROM users
       Where email=? AND hash_password=?';
       
       //* 1 - prepar the query

       $userPreparQuery = $pdo->prepare($userQuery);
       $userPreparQuery->bindValue(1, $login);        
       $userPreparQuery->bindValue(2, $password);  
       
       
        //* 2 - Execute the query
        $userPreparQuery->execute();
        
        //* 3 - Fetch/Get the results
        $row =  $userPreparQuery->fetch(PDO::FETCH_ASSOC); 

        //* 4 - Return false or a User

        if($row){

            //* user exists. Create the user and return it
            $user = new User($row['email'], $row['user_id']);
            return $user;
         
        


        //*old version;
      //  $queryEmail = "SELECT * FROM users WHERE email =  '$login' AND hash_password = '$password'";
        
        /*$connected = mysqli_query($conn, $queryEmail);
        
        if($connected){                      
            $id = "";
              
            while($getId = mysqli_fetch_assoc($connected)){
                $id = $getId['user_id']; 
            }
            $newUser = new User($login, $id);
            */
                     
            
        }else{
            echo "Your credentials are not correct";
            return false;
        }

    }
    
}