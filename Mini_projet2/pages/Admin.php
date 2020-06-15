<?php

?>
<div class="container">
    <div class="head">
        <button class="btn-deconnexion">Deconnexion</button>
        <p class="text-form">CREEZ ET PARAMETREZ VOS QUIZ</p>
    </div>
    <div class="container-fluid">
        <div class="droite">
            <div class="droite-prime "><img src="pages/upload/<?=$_SESSION['user']['photo']?>" alt="" srcset=""></div>
            <p class="prenom"><?=$_SESSION['user']['prenom']?></p>
            <p class="nom"><?=$_SESSION['user']['nom']?></p>
        </div>
        <div id="add_admin" class="gauche">

        </div>   
        <div class="row">
                <a href="create_admin">
                <button  class="btn-form cr-admin">Créer Admin</button>
                </a>
                <a href="#">
                <button  class="btn-form cr-question">Créer Questions</button>
                </a>
                <a href="#">
                <button  class="btn-form">Liste Joueurs</button>
                </a>
                <a href="#">
                <button  class="btn-form">Liste Questions</button>
                </a>
                <a href="#">
                <button  class="btn-form">Liste Admins</button>
                </a>
        </div>
    </div>
</div>
<script> 
$(document).on('click','a',function(e){
e.preventDefault();
let page=$(this).attr('href');
$('#add_admin').load('pages/'+page+'.php')
});
</script>