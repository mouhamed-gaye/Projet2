<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page de Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="quizz.css">
    <script src="main.js"></script>
</head>
<body>
<div class="header">
        <div class="logo"></div>
        <div class="header-text"> Le plaisir de Jouer</div>
    </div>
    <div class="content">
        <div class="container">
        <div class="contener-header">
        <div class="title"> WELCOME!</div>
        <div class="title1">User Login</div>
    
        <form action="" method="POST" id="form-connexion">
            <div class="input-form">
                <div class="icon-form" icon-form-login><img src="image/iconelogin.jpg" width="50%"/></div>
                <input type="text" class="form-control"  error="error-1" name="login" value="" placeholder="login">
                <div class="error-form" id="error-1"></div>
            </div>
            <div class="input-form" >
                <div class="icon-form" icon-form-pwd><img src="image/lock.png" width="50%"/></div>
                <input type="password" class="form-control" error="error-2" name="password" value="" placeholder="password">
                <div class="error-form" id="error-2"></div>
            </div>
            <div class="input-form">
            <button type="submit" class="btn-form" name="btn-form">Connexion</button>
            <a href="#" class="link-form">Créer Compte Joueur?</a>
            </div>
        </form>
    </div>
    </div>

        </div>

    
</body>
</html>