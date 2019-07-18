<?php

namespace MyProject\Flowers\Db;


require_once "User.php";
use MyProject\Flowers\User;
class UserManager
{

    public function login($login, $password){
        require_once "db-conection.php";
        
        $queryEmail = "SELECT * FROM users WHERE email =  '$login' AND hash_password = '$password'";
        
        $connected = mysqli_query($conn, $queryEmail);
        
        if($connected){                      
            $id = "";
            while($getId = mysqli_fetch_assoc($connected)){
                $id = $getId['user_id']; 
            }
                     
            $newUser = new User($login, $id);            
            return $newUser;
         
        }else{
            echo "Your credentials are not correct";
            return false;
        }

    }
    
}