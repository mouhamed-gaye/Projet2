<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

require_once('connexionDB.php');

$req = $connect->prepare('SELECT * FROM user WHERE login = :login AND password = :password');
$req->execute(array('login' => $login, 'password' =>$password));
$resultat = $req->fetch();
if ($resultat!==false) {
    $_SESSION['user']=$resultat;// regarde ici
    if ($resultat['profil'] == "admin") {
        echo "admin";
    } elseif($resultat['profil']=="joueur") {
        echo "joueur";
    }
} else {
    echo "error";
}

?>
