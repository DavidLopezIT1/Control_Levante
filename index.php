<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <title>Control Agendamientos OCQA</title>
</head>
<body>
    <div class="header"> 
    <span class="openTecnología">openTecnología </span>
    <span class="Header_Text">Usuario: ...</span>
        <span class="Header_Text">Id: ...</span>
            <span class="Header_Text">Db: ...</span>
                <span class="Header_Text">Fecha: ...</span>
    </div>
    
    <header>
    <div class="ruta">
        <h3 class="Links"><a href="log-in.php"> Inicio> </a></h3>
        <h3 class="Links"><a href="user.php"> User> </a></h3>
        <h3 class="Links"><a href="index.php"> Variables> </a></h3>
        <h3 class="Links"><a href="fact.php"> Campos de Factura> </a></h3>
        <h3 class="Links"><a href="complementar.php"> Complementar> </a></h3>
        <h3 class="Links"><a href="nuevo_robot.php"> Robot...> </a></h3>
        </div>
        <h1>Inicialización de Controles de Validación Lógica y Condicional</h1>
        <h2>Validación Control de Agendamientos</h2>
    </header>

    <main>

    <form action="" method="get">
    <div><span>Código</span></div>
    <div><label for="">Bloquear_Agendamiento_Con_Aceptación</label></div>
    <div>Descripción</div>
    <div><textarea name="Variable_Validator_Tram1" id="Variable_Validator_Tram1" cols="70" rows="4" disabled >Esta variable permite o no al sistema realizar el bloqueo del botón Agendar cada vez que el trámite esté con estado Aceptación</textarea></div>
    <div>Valor</div>
    <div><input type="text" size="10px"></div>

        </form>

        <form action="">

      <button>Guardar</button>

        </form>


    </main>
    <footer></footer>
</body>

</html>