<form  id="inscription" action="pages/addUser.php" method="post" enctype="multipart/form-data">

    
    <div class="container-all">
        <div class="gauche-gauche">
            <div class="gauche_second">
                <div class="form-group">
                    <input type="text" placeholder="Prenom" name="prenom" id="prenom" class="form-control field input-form">
                    <div class="mistake" id="error-1"></div>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Nom" name="nom" id="nom" class="form-control field input-form">
                    <div class="mistake" id="error-2"></div>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Login"name="login" id="login" class="form-control field input-form">
                    <div class="mistake" id="error-3"></div>
                </div>
                <div class="form-group">
                    <input type="Password" placeholder="Password"name="password"id="password" class="form-control field input-form">
                    <div class="mistake" id="error-4"></div>
                </div>
                <div class="form-group">
                    <input type="Password" placeholder="Confirmer Password" name="password1" id="password1" class="form-control field input-form">
                    <div class="mistake" id="aint"></div>
                </div>
            </div>
            <div class="gauche_first">
                    <div class="gauche-prime ">
                    <img class="image-profil" id="output">
                    </div>
                    <div class="row lbl-avatar">
                        <div class="avatar">Avatar</div>
                    </div>
                <div class="row bouton">
                    <label for="file" class="label-image">Choisir Image</label>
                    <input  type="file" id="file" name="file" class="picture" accept="image/*" onchange="loadFile(event)">
                </div>
                <div class="row creer_compte">
                    <button type="submit" name="inscript" id="inscript" class="create">Créer Compte</button>
                </div>
            </div>
         
        </div>
    </div>
</form>
<script>

    $(document).ready(function(){

        var $prenom = $('#prenom'),
            $nom= $('#nom'),
            $login= $('#login'),
            $password = $('#password'),
            $password1 = $('#password1'),
            $file= $('#file');

            $(document).on('keyup','.field',function(){ // Lorsqu'on saisit sur un input avec la class field
                if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
                    $(this).css({ // on rend le champ rouge
                        borderColor : 'red',
                        color : 'red'
                    });
                }
                else{
                    $(this).css({ // si tout est bon, on le rend vert
                        borderColor : 'green',
                        color : 'green'
                    });
                }
            });

            $(document).on('submit',function(e){
                let arrayinput=[$prenom,$nom,$login,$password,$password1,$file];
                arrayinput.forEach(input=>{
                    if(input.val() === ""){ // Si le champ est vide
                        $("#aint").html("Les Champs sont obligatoires !").css({color: 'red', display:'block'}); 
                        input.css({ // on rend le champ rouge
                            borderColor : 'red',
                            color : 'red'
                        });
                        e.preventDefault();
                    }
                });
                if($password1.val()!== $password.val()){
                    $("#aint").html("Passswords non identiques!").css({color: 'red', display:'block'});
                    $("#password1, #password").css({ // on rend le champ rouge
                        borderColor : 'red',
                        color : 'red'
                    });
                    e.preventDefault();
                }
            });

            $(document).on('keyup','#password1',function(){
                $("#aint").css("display", "none");
            });

            $(document).on('keyup','#password1',function(){
                $("#aint").css("display", "none");
            });

            $(document).on('submit',function(){
                let form_data= new FormData(myForm);
                $.ajax({
                    url:'./pages/addUser.php',
                    processData:false,
                    dataType:false,
                    contentType:false,
                    type:'post',
                    data: form_data,
                    success: function (response) {
                        if(response === "bon"){
                            window.location.replace = "index.php";
                        }else{
                            alert('formulaire non envoyé'+response);
                        }
                    }
                });
            });

    });

</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    };
  };
</script>