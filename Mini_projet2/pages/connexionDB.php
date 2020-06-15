<?php
$erreur="";
$host="mysql-mouhamedgaye.alwaysdata.net";
$username="208783";
$pass="mouhamed";
$database="mouhamedgaye_quizz";
try {
    $connect= new PDO("mysql:host=$host; dbname=$database",$username,$pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $error) {
    $erreur= $error->getMessage();
}
?>