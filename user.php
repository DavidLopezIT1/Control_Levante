<?php
include "validator.php";

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
        <h3 class="Links"><a href="variables.php"> Variables> </a></h3>
        <h3 class="Links"><a href="fact.php"> Campos de Factura> </a></h3>
        <h3 class="Links"><a href="complementar.php"> Complementar> </a></h3>
        <h3 class="Links"><a href="nuevo_robot.php"> Robot...> </a></h3>
        
        </div>
</header>

<main>
<form action="validator.php" method="post">
    <fieldset>
        <legend>Formulario de usuarios</legend>
    <label for="user_name1" class="user_nameL">Nombre usuario</label>
    <label for="user_id1" class="user_idL">Identificación usuario</label>
    <label for="user_login1" class="user_loginL">Log-In usuario</label>
    <label for="user_Email1" class="user_EmailL">Email usuario</label>
    <label for="user_Email1" class="user_EmailL">Cargo</label>
    <label for="user_Email1" class="user_EmailL">Tipo usuario</label>
    <label for="user_Email1" class="user_EmailL">Contraseña</label>
    <label for="user_Email1" class="user_EmailL">Sucursal</label>

    <br>
    <input type="text" class="user_name1" name="user_name">
    <input type="text" class="user_id1" name="user_id">
    <input type="text" class="user_login1" name="user_login">
    <input type="text" class="user_Email1" name="user_Email">
    <input type="submit" name="Guardar">


    </fieldset>    
</form>



</main>

<footer>

</footer>

</body>

</html>
