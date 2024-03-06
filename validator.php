<?php
<<<<<<< HEAD
include "conection.php";
=======
include "/conection.php";

>>>>>>> origin/master
?>

<?php

    if(isset($_POST['Guardar'])){
        
        if(strlen($_POST['user_name']) >= 1 && strlen($_POST['user_id']) >= 1 && strlen($_POST['user_login']) >= 1 ){ 
        $nombreUsuario = trim($_POST['user_name']);
        $IdUsuario = trim($_POST['user_id']);
        $LogInUsuario = trim($_POST['user_login']);
        $CorreoUsuario = trim($_POST['user_Email']);
<<<<<<< HEAD
        $consult = "INSERT INTO users_2(id, nombre, loginUsuario, correo) VALUES('$IdUsuario','$nombreUsuario', '$LogInUsuario', '$CorreoUsuario')";
=======
        $consult = "INSERT INTO opencomexusuarios(id, nombre, login, correo) VALUES (`$IdUsuario`, `$nombreUsuario`, `$LogInUsuario`, `$CorreoUsuario`)";
>>>>>>> origin/master
        $resultado = mysqli_query($conection, $consult);
        if($resultado){
            ?>
            <h3 class="OK"> Inscripción correcta</h3>
            <?php
        }
        else{
            ?>
            <h3 class="OK"> Inscripción Incorrecta</h3>
          <?php   
        }              
    }
    
}
<<<<<<< HEAD

=======
    ?>
>>>>>>> origin/master
