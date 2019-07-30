<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once "Robot.php";
    use MyProject\Robot as NewRobot;

    $firstRobot = new NewRobot("123", "grey");
    $firstRobot->getInfos();
    var_dump($firstRobot->getInfos());

    $secondRobot = new NewRobot("1256456", "silver");
    $secondRobot->getInfos();
    var_dump($secondRobot->getInfos());

?>
</body>
</html>