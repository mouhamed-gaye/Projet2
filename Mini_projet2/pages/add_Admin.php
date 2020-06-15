<?php
$host="mysql-mouhamedgaye.alwaysdata.net";
$username="208783";
$pass="mouhamed";
$database="mouhamedgaye_quizz";

$connect= new PDO("mysql:host=$host; dbname=$database",$username,$pass);
    //$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $target= "upload/".basename($_FILES['file']['name']);
    $file= $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $target);

    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['login'])
        && isset($_POST['password']) && isset($_FILES['file'])){
        $prenom= strtoupper($_POST['prenom']);
        $nom= ucfirst($_POST['nom']);
        $login= $_POST['login'];
        $password= $_POST['password'];
        $file=$_FILES['file']['name'];

        if (!empty($prenom) && !empty($nom) && !empty($login) && !empty($password) && !empty($file)){

            $req= $connect->prepare('INSERT INTO user (prenom, nom, login,password, profil,photo) VALUES (:prenom,:nom,:login,:password,:profil,:photo)');
            $req->execute(array(
                'prenom'=>$prenom,
                'nom'=>$nom,
                'login'=>$login,
                'password'=>$password,
                'profil'=>"admin",
                'photo'=>$file
            ));
            if($req->rowCount() > 0){
                echo"bon";
                header("location: Admin.php?lien=admin");
            }else {
                echo "mauvais";
            }
            $req->closeCursor();
        }

    }