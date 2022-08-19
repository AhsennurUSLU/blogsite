<?php 

$server = "localhost";
$username= "root";
$password = "";
$vt = "admin_login";


try
{
    $db = new PDO("mysql:host=$server;dbname=$vt", $username, $password);
}
catch(PDOException $e)
{
    echo $e -> getMessage();
}     



?>





