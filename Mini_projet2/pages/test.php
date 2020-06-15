





<? php
$ erreur = "" ;
$ erreur1 = "" ;
$ message = "" ;
if ( isset ( $ _POST [ 'btn-submit' ]))) {
        $ User = array ();
        if ( $ _POST [ 'prenom' ]! = '' && $ _POST [ 'nom' ]! = '' && $ _POST [ 'login' ]! = '' && $ _POST [ 'password' ]! = '' && $ _POST [ 'password1' ]! = '' && $ _FILES [ 'avatar' ]! = '' ) {
        $ file = $ _FILES [ 'avatar' ];
        $ prenom = $ _POST [ 'prenom' ];
        $ nom = $ _POST [ 'nom' ];
        $ login = $ _POST [ 'login' ];
        $ mot de passe = $ _POST [ 'mot de passe' ];
        $ password1 = $ _POST [ 'password1' ];
    #Traitement sur l'upload de l'image de profil
        $ fileName = $ _FILES [ 'avatar' ] [ 'nom' ];
        $ fileTmpName = $ _FILES [ 'avatar' ] [ 'tmp_name' ];
        $ fileSize = $ _FILES [ 'avatar' ] [ 'size' ];
        $ fileError = $ _FILES [ 'avatar' ] [ 'error' ];
        $ fileType = $ _FILES [ 'avatar' ] [ 'type' ];
        $ FileExt = exploser ( '' , $ fileName );
        $ fileActuelExt = strtolower ( end ( $ fileExt ));
        $ allowed = array ( 'jpg' , 'png' , 'jpeg' );
    # vérification des logins mots de passe et sur le téléchargement de l'image de profil
    if ( in_array ( $ fileActuelExt , $ allowed )) {
        if ( $ fileError === 0 ) {
            if ( $ fileSize < 2000000 ) {
                $ fileNameNew = $ login . "." . $ fileActuelExt ;
                $ fileDestination = 'uploads /' . $ fileNameNew ;
                move_uploaded_file ( $ fileTmpName , $ fileDestination );
    #enregistrement des données dans le fichier json
            $ User [ 'prenom' ] = $ prenom ;
            $ User [ 'nom' ] = $ nom ;
            $ User [ 'login' ] = $ login ;
            $ User [ 'password' ] = $ password ;
            $ User [ 'role' ] = "admin" ;
            $ User [ 'avatar' ] = $ fileNameNew ;
            $ js = file_get_contents ( "users.json" );
            $ js = json_decode ( $ js , true );
            $ js [] = $ User ;
            $ js = json_encode ( $ js );
            file_put_contents ( "users.json" , $ js );
            header ( "location: index.php? lien = accueil & block = inscription" );
            } else {
                $ message = "Taille du fichier trés grande" ;
            }

        } else {
            $ message = "Erreur de téléchargement!" ;
        }

    } else {
        $ message = "Type de fichier non pris en charge!" ;
    }       
}
































<?php
$message="";
if(isdet($_POST['inscript'])){
    if ( $_POST[ 'prenom' ] != '' && $_POST[ 'nom' ] != '' && $_POST [ 'login' ] != '' && $_POST[ 'password' ] != '' && $_POST[ 'password1' ] != '' && $_FILES[ 'avatar' ] != '' ) {
    $file =$_FILES[ 'avatar' ];
#Traitement sur l'upload de l'image de profil
    $fileName =$_FILES[ 'avatar' ][ 'nom' ];
    $fileTmpName = $_FILES [ 'avatar' ][ 'tmp_name' ];
    $fileSize = $_FILES[ 'avatar' ][ 'size' ];
    $fileError = $_FILES[ 'avatar' ][ 'error' ];
    $fileType = $_FILES[ 'avatar' ][ 'type' ];
    $FileExt = exploser( '' , $fileName );
    $fileActuelExt = strtolower ( end ( $fileExt ));
    $allowed = array( 'jpg' , 'png' , 'jpeg' );
# vérification sur le téléchargement de l'image de profil
        if ( in_array ( $fileActuelExt , $allowed )) {
            if ( $fileError === 0 ) {
                if ( $fileSize < 2000000 ) {
                    $fileNameNew = $login . "." . $fileActuelExt ;
                    $fileDestination = 'upload/' . $fileNameNew ;
                    move_uploaded_file( $fileTmpName , $fileDestination );
                } else {
                    $message = "Taille du fichier trés grande" ;
                }

            } else {
                $message = "Erreur de téléchargement!" ;
            }

        } else {
            $message = "Type de fichier non pris en charge!" ;
        }  
}

?>






































































if($("#prenom").val()==""){
        $("#prenom").addClass('has-error');
        $("#error-1").text('champs obligatoire');
        resultat=false;
    }
    if($("#nom").val()==""){
        $("#nom").addClass('has-error');
        $("#error-2").text('champs obligatoire');
        resultat=false;
    }
    if($("#login").val()==""){
        $("#login").addClass('has-error');
        $("#error-3").text('champs obligatoire');
        resultat=false;
    }
    if($("#password").val()==""){
        $("#password").addClass('has-error');
        $("#error-4").text('champs obligatoire');
        resultat=false;
    }
    if($("#password1").val()==""){
        $("#password1").addClass('has-error');
        $("#error-5").text('champs obligatoire');
        resultat=false;
    }
    return resultat;
});
    $("#prenom").keyup(function(){
        if($("#prenom").val()==""){
        $("#prenom").addClass('has-error');
        $("#error-1").text('champs obligatoire');
        resultat=false;
        }else{
        $("#prenom").removeClass('has-error');
        $("#error-1").text('');
        }
    })
    $("#nom").keyup(function(){
        if($("#nom").val()==""){
        $("#nom").addClass('has-error');
        $("#error-2").text('champs obligatoire');
        resultat=false;
        }else{
        $("#nom").removeClass('has-error');
        $("#error-2").text('');
        }
    })
    $("#login").keyup(function(){
        if($("#login").val()==""){
        $("login").addClass('has-error');
        $("#error-3").text('champs obligatoire');
        resultat=false;
        }else{
        $("#login").removeClass('has-error');
        $("#error-3").text('');
        }
    })
    $("#password").keyup(function(){
        if($("#password").val()==""){
        $("#password").addClass('has-error');
        $("#error-4").text('champs obligatoire');
        resultat=false;
        }else{
        $("#password").removeClass('has-error');
        $("#error-4").text('');
        }
    })
    $("#password1").keyup(function(){
        if($("#password1").val()==""){
        $("#password1").addClass('has-error');
        $("#error-5").text('champs obligatoire');
        resultat=false;
        }else{
        $("#password1").removeClass('has-error');
        $("#error-5").text('');
        }
    })















        $.ajax({
            url: './pages/addUser.php',
            type: 'POST',
            data: {
                prenom:$("#prenom").val(),
                nom:$("#nom").val(),
                login: $("#login").val(),
                password:$("#password").val(),
                profil:"joueur",
               // photo:$("#file").val()

            },
            success: function(response){
                if (response=="bon") {
                    alert("bien");
                } else {
                    alert("as bon"+response);
                }
            }
        });