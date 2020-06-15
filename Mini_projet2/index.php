<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page de Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="quizz.css">
</head>
<body>
<div class="header">
        <div class="logo"></div>
        <div class="header-text"> Le plaisir de Jouer</div>
</div>
    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 content">
        <div class="principale">

<?php
if(isset($_GET['lien'])){
    switch($_GET['lien']){
        case "admin":
            require_once("pages/Admin.php");
        break;
        case "joueur":
            require_once("pages/joueur.php");
        break;
        case "inscription":
            require_once("pages/inscription_joueur.php");
        break;
        default;
    }
}else{
    if (isset($_GET['statut']) &&$_GET['statut']==="logout") {
        deconnexion();
    }
    require_once("pages/connexion.php");
}



?>






             
        </div>
    </div>
</body>
</html>