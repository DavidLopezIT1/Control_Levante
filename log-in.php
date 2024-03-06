<?php
include 'validator.php';

//include 'conection.php';
session_start();

if(isset($_POST['Acepta_Usuario'])){

// Debo traer un array en donde se encuentre la información de la tabla users_2 -> Se utiliza el mysqli_fetch_array($variable)

    if(strlen($_POST['SpaceLogin']>1)){
        $loginuserL = trim($_POST['SpaceLogin']);
        $consultaUsuario= $conection->query("SELECT loginUsuario FROM users_2 WHERE loginUsuario LIKE '%$loginuserL%'");       
        $constanteUsuario =  mysqli_fetch_array($consultaUsuario); 
    }

    if(isset($_POST['Acepta_Usuario']) && $loginuserL = $constanteUsuario){
        header("location: http://localhost/Control_Levante-master//fact.php");
    }else{?>
        
        <script>alert('NO puede ingresar, Credenciales de acceso NO validas')</script>  
        
    <?php  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log-in.css">
    <link rel="stylesheet" href="https://indestructibletype.com/fonts/Jost.css" type="text/css" charset="utf-8" />
    <script src="https://kit.fontawesome.com/5bcdd05e64.js" crossorigin="anonymous"></script>
    <title>Init_Program_index.html</title>
</head>
<body>
    <header>
    <span class="openTecnología">DsTecnology </span>
    <span class="Header_Text">Usuario: ...</span>
        <span class="Header_Text">Id: ...</span>
            <span class="Header_Text">Db: ...</span>
            <span class="Header_Text">Fecha: ...</span>
        </header>
        

    <main>
        <div class="Cont_contenedor1">
        <div class="contenedor1">
            <img src="./images_index.html/clave_left-removebg-preview.png" alt="Key_Left_Image" class="Key_Image">
            <span class="open_Access">SystemLP Access</span>
            <img src="./images_index.html/clave_right.png" alt="Key_Right_Image">
        </div>
    </div>

    <div class="Cont_contenedor2">
        <div class="contenedor2">
            <form action="" method="post">
                <fieldset>
                    <legend>SystemLP Login</legend>
            
               <strong> <label for="">Login</label></strong>
               <input type="text" size="80px" name="SpaceLogin" <?php  ?> >
            </fieldset>
            
        </div>
   </div>
    
        <div class="button">
            <button name="Acepta_Usuario" ><i class="fa-solid fa-circle-check"></i>Aceptar</button>
        </div>
        </form>
    </main>

    <footer>
<?php

?>
    </footer>

</body>
</html>