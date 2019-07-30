<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
  </head>
  <body>
    <?php require_once 'User.php'; 

      $allUser = file_get_contents('user.json');
      $userArray = json_decode($allUser);
     

    if(isset($_POST["submit"])){

      if(empty($_POST['name']) || empty($_POST['mail'])){
        echo "both of fiels are required<br>";

      }else{

      $user = new User($_POST['name'], $_POST['mail']);
      $newUser = $user->jsonSerialize();
      
      if(strpos($allUser, $_POST['mail']) !== false) {

        echo "Welcome, old member";

      }else{
        $userArray[]= $newUser;
        
        $myJson = json_encode($userArray, JSON_PRETTY_PRINT);
        
        file_put_contents('user.json', $myJson);
        echo "Welcome, new user";

      }
    }
  }
    
    ?>
    <form action="" method="POST">
      <input type="text" placeholder="name" name="name" />
      <input type="email" placeholder="mail" name="mail" />
      <input type="submit" name="submit" value="submit" />
    </form>
  </body>
</html>
