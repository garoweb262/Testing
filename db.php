<?php

$username= 'root';
$password = '';

$db = 'mysql:host=localhost; dbname=garodb';
try
{
    $con= new PDO($db, $username, $password);
    //echo 'conected....';
}catch(PDOException $e){
   echo "Error" . $e ->getMessage();  
}
?>