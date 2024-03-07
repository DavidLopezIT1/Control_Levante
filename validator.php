<?php
include "conection.php";
?>

<?php

    if(isset($_POST['Guardar'])){
        
        if(strlen($_POST['user_name']) >= 1 && strlen($_POST['user_id']) >= 1 && strlen($_POST['user_login']) >= 1 ){ 
        $nombreUsuario = trim($_POST['user_name']);
        $IdUsuario = trim($_POST['user_id']);
        $LogInUsuario = trim($_POST['user_login']);
        $CorreoUsuario = trim($_POST['user_Email']);
        $consult = "INSERT INTO users_2(id, nombre, loginUsuario, correo) VALUES('$IdUsuario','$nombreUsuario', '$LogInUsuario', '$CorreoUsuario')";
        if($resultado){
        }
        else{
            ?>
            <h3 class="OK"> Inscripción Incorrecta</h3>
          <?php   
        }              
    }
    
}
