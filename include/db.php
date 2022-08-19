<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="admin_login";


try
{
    $db = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
}
catch(PDOException $e)
{
    echo $e -> getMessage();
}     


?>