<?php
$dsn="mysql:host=localhost;dbname=database";
$username="root";
$password="";

try{
    $conn= new PDO($dsn,$username,$password,[
        PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
    ]);
    
} catch(PDOExceptin $e){
    echo"connection error\n";
    echo $e->getMessage();

}
?>