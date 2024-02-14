
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
<form method="post">
    <fieldset>
        <legend>Formulario de usuarios</legend>
    <label for="user_name" class="user_nameL">Nombre usuario</label>
    <label for="user_id" class="user_idL">Identificación usuario</label>
    <label for="user_login" class="user_loginL">Log-In usuario</label>
    <label for="user_Email" class="user_EmailL">Email usuario</label>
    <br>
    <input type="text" class="user_name" name="user_id">
    <input type="text" class="user_id" name="user_name">
    <input type="text" class="user_login" name="user_login">
    <input type="text" class="user_Email" name="user_Email">
    <input type="submit" name="Guardar">


    </fieldset>    
</form>
</main>

<footer>

</footer>

</body>

</html>
