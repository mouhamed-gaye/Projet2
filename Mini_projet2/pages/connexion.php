<?php 


?>
<div class="contener">
    <div class="contener-header">
        <div class="row">
            <p class="title"> WELCOME!</p>
        </div>
        <div class="row">
            <p class="title1">User Login</p>
        </div>
    </div>

    <form action="" method="POST" id="form-connexion">
        <div class="form-group input-form1">
            <div class="icon-form1" icon-form-login><img src="image/iconelogin.jpg" width="50%"/></div>
            <input type="text" class="form-control1"  error="error-1" name="login"  id="login" value="<?php if(isset($_POST['login'])){ echo $_POST['login'];} ?>" placeholder="login">
            <div class="error-form" id="error-1"></div>
        </div>
        <div class="form-group input-form1" >
            <div class="icon-form1" icon-form-pwd><img src="image/lock.png" width="50%"/></div>
            <input type="password" class="form-control1" error="error-2" name="password" id="password" value="<?php if(isset($_POST['password'])){ echo $_POST['password'];} ?>" placeholder="password">
            <div class="error-form" id="error-2"><?php if (isset($erreur)){ echo $erreur; }?></div>
        </div>
        <div class="form-group1 input-form1">
            <div class="row">
                <button type="submit" class="btn-form1" id="btn-form">Connexion</button>
            </div>
            <div class="row">
                <a href="index.php?lien=inscription" class="link-form">Créer Compte Joueur?</a>
            </div>
        </div>
    </form>
</div>



<script>
    $(document).ready(function() {
        $("#btn-form").click(function(e) {
            e.preventDefault();
            var login = $("#login").val();
            var password = $("#password").val();

            if (login != "" && password != "") {
                $.ajax({
                    url: './pages/verif.php',
                    type: 'POST',
                    data: {
                        login: login,
                        password: password
                    },
                    success: function(response) {
                        var msg = "";
                        if (response == "error") {
                            msg = "Login ou Password incorrect!";
                        } else {
                            window.location = "index.php?lien=" + response;
                        }
                        $("#error-2").html(msg);
                    }
                });
            } else {
                $("#error-2").text('Les champs sont  obligatoires');
            }
        });
    });
</script>