<?php
session_start();

require_once "UserManager.php";

use MyProject\Flowers\Db\UserManager as Manager;


if(isset($_POST['login']) && isset($_POST['password'])) {
    $userManager = new Manager();
    var_dump( $userManager);
    $userLogged = $userManager->login($_POST['login'], $_POST['password']);
    var_dump($userLogged);
    if(!empty($userLogged)) {
        $_SESSION['user']['mail']   = $userLogged->getMail();
        $_SESSION['user']['id']     = $userLogged->getId();
        header("location: view-flowers.php");
    }
}

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
<h1>Login into Flowers</h1>
    <form action="" method="POST">
    <input type="text" name="login" placeholder="email">    
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="See flowers">
    </form>


</body>
</html>