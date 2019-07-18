<?php
/*define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_Name', 'flowers');

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
$db_name = DB_Name;
$db_found = mysqli_select_db($conn, $db_name);
*/
//* 1 - connect to the database
$dsn = 'mysql:host=localhost;dbname=flowers';
$pdo = new PDO($dsn, 'root', "");
