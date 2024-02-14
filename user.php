<?php
include "/conection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title>Formulario del usuario</title>
</head>
<body>
<header>
<div class="ruta">
        <h3 class="Links"><a href="log-in.php"> Inicio> </a></h3>
        <h3 class="Links"><a href="index.php"> Variables> </a></h3>
        <h3 class="Links"><a href="fact.php"> Campos de Factura> </a></h3>
        <h3 class="Links"><a href="complementar.php"> Complementar> </a></h3>
        <h3 class="Links"><a href="nuevo_robot.php"> Robot...> </a></h3>
        
        </div>
</header>

<main>
<form action="" method="post">
    <fieldset>
        <legend>Formulario de usuarios</legend>
    <label for="user_name" class="user_nameL">Nombre usuario</label>
    <label for="user_id" class="user_idL">Identificación usuario</label>
    <label for="user_login" class="user_loginL">Log-In usuario</label>
    <label for="user_Email" class="user_EmailL">Email usuario</label>
    <br>
    <input type="text" class="user_name" name="user_name">
    <input type="text" class="user_id" name="user_id">
    <input type="text" class="user_login" name="user_login">
    <input type="text" class="user_Email" name="user_Email">
    <input type="submit" name="Guardar">

    <?php

    if(isset($_POST["Guardar"])){
       
        if(strlen($_POST["user_login"]) >= 1){ 
        $nombreUsuario = trim($_POST["user_name"]);
        $IdUsuario = trim($_POST["user_name"]);
        $LogInUsuario = trim($_POST["user_login"]);
        $Query = "INSERT INTO `User-opencomex`(`Login_User`, `Name_User`, `ID_User`) VALUES ('[value-1]','[value-2]','[value-3]')";
        $resultado = $conection->query;  
        }
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
    ?>

    </fieldset>    
</form>
</main>

<footer>

</footer>

</body>

</html>
