<?php


?>

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
    <span class="openTecnología">Ds Tecnology  </span>
    <span class="Header_Text">Usuario: <?php if($_SESSION){ echo $usuariosqui;} else{ echo "...";} ?></span>
        <span class="Header_Text">Id: ...</span>
            <span class="Header_Text">Db: ...</span>
                <span class="Header_Text">Fecha: ...</span>
    </div>
    
    <header>
    <div class="ruta">
        <h3 class="Links"><a href="log-in.php"> Inicio> </a></h3>
        <h3 class="Links"><a href="user.php"> User> </a></h3>
        <h3 class="Links"><a href="variables.php"> Variables></a></h3>
        <h3 class="Links"><a href="fact.php"> Campos de Factura> </a></h3>
        <h3 class="Links"><a href="complementar.php"> Complementar></a></h3>
        <h3 class="Links"><a href="nuevo_robot.php"> Robot...></a></h3>
        </div>
        
    </header>

    <main>
    <div class="cont_body">
            <h1>Inicialización de Controles de Validación Lógica y Condicional</h1>
                
        <form action="" method="post">

            <fieldset>
                <legend>Variable general del sistema</legend>
                
                <div class="mixed"><span class="codigo">Código</span> <span class="valor">Valor</span></div>
                
                <div>
                    <input type="text" value="Bloquear_Agendamiento_Con_Aceptación" disabled size="55%" class="Name_Var">
                    <input type="text" size="55%">
                </div>

                <div>Descripción</div>
                    <div>
                        <textarea name="Variable_Validator_Tram1" id="Variable_Validator_Tram1" cols="90" rows="4" disabled >Esta variable permite o no al sistema realizar el bloqueo del botón Agendar cada vez que el trámite esté con estado Aceptación</textarea>
                    </div>

            </fieldset>
                <div >
                    <button class="button_var_one" >Guardar</button>
                    <button>Salir</button>
                </div>
        </form>

        

           

            

        </form>

    </div>

    </main>
    <footer></footer>
</body>

</html>