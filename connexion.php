<?php 
$host = "db.3wa.io";
$port = "3306";
$dbname = "morganledez_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "morganledez";
$password = "fddf083ac397e60104689ea7c5404f7c";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
var_dump($db);
?>

