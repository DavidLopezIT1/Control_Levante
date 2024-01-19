
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_robot.css">
    <script src="https://kit.fontawesome.com/5bcdd05e64.js" crossorigin="anonymous"></script>
    <title>Control Agendamientos OCQA</title>
</head>
<body>
    <header>
        <div class="ruta">
        <h3 class="Links"><a href="index.php"> Variables> </a></h3>
        <h3 class="Links"><a href="fact.php"> Campos de Factura> </a></h3>
        <h3 class="Links"><a href="complementar.php"> Complementar> </a></h3>
        <h3 class="Links"><a href=""> Robot...> </a></h3>
        
        </div>
    </header>

    <main>

        <form action="" method="">

            <fieldset>

                <legend>Robotización Subpartidas DO/IMP <span class="BUN-BUNI0211037-001">BUN-BUNI0211037</span>-001</legend>

            <label for="Login_Siglo_XXI" class="Login_Siglo_XXI">Login Siglo XXI</label>
            <label for="Password_Siglo_XXI" class="Password_Siglo_XXI">Password Siglo XXI</label>
            <label for="Select_Agendamiento" class="Agendar_Para">Agendar para</label><br>
            <input type="text" name="Login_Siglo_XXI" class="Login_Siglo_XXI_Input">
            <input type="text" name="Password_Siglo_XXI" class="Password_Siglo_XXI_Input">
        
        <select name="Select_Agendamiento" id="Select_Agendamiento">
           
            <option value="">Seleccione</option>
            <option value="">Radicado</option>
            <option value="">Documentos Soporte</option>
            <option value="">Radicado + Documentos Soporte</option>
            <option value="">Aceptación</option>
            <option value="">Radicado + Documentos Soporte + Aceptación</option>
            <option value="">Levante</option>
            <option value="">Complementar datos hasta Aceptación</option>
            <option value="">Complementar datos hasta Stycker</option>
            <option value="">Complementar datos hasta Levante</option>
        </select>
        <input type="submit" value="Generar">
        <input type="submit" value="Agendar">
        <input type="submit" value="Validar Trámite">
        
       

        
        <form action="" method="">
    
        <table>

    <thead>
<th>Sub</th>
<th>Subpartida</th>
<th>Radicado</th>
<th>Fecha</th>
<th>Docs.<br> Soporte</th>
<th>Aceptación</th>
<th>Fecha</th>
<th>Autoadhesivo</th>
<th>Fecha</th>
<th>Recibo<br> O.P</th>
<th>Fecha</th>
<th>Hora</th>
<th>Valor</th>
<th>Pago Total</th>
<th>Con.<br> Inv.</th>
<th>Act.<br> Anti.</th>
<th>Levante</th>
<th>Fecha</th>
<th>Tipo <br> Levante</th>
<th>Actas <br>Inspeccion</th>
<th>Fecha</th>
<th>Autoadhesivo <br> Automatico</th>
<th>Resultado</th>
<th><input type="checkbox"></th>
</thead>
<?php 
    $RadicadoSxxi = $_POST["Radicado_S_XXI"];
    $fechaRad = $_POST["Fecha2"];
    $hora = $_POST["Hora2"];
    $aceptacion = $_POST["Aceptación"];
    $fechaAcep = $_POST["Fecha3"];
    $horaAcep = $_POST["Hora3"];
    $Autoadhesivo = $_POST["Autoadhesivo"];
    $fechaAutoad = $_POST["Fecha4"];
    $horaAutoad = $_POST["Hora4"];
    ?>
<tbody>
    <td>1</td>
    <td>2101110010</td>
    <td> <?php echo $RadicadoSxxi ?> </td>
    <td> <?php echo $fechaRad ?> </td>
    <td> <?php echo"OK"; ?> </td>
    <td><?php echo $aceptacion; ?></td>
    <td> <?php echo $fechaAcep ?> </td>
    <td> <?php echo $Autoadhesivo ?> </td>
    <td> <?php echo $fechaAutoad ?> </td>
    <td> <?php echo"";?> </td>
    <td> <?php echo"";?> </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="Check_td"><input type="checkbox"></td>
</tbody>
</table>     
        </form>
            </fieldset>
        </form>
    </main>
    <footer>
        <div class="Footer_Message">
            <input type="checkbox">
        <span> Haz clic aqui para <strong>Descartar Validación</strong> de las Declaraciones que se han Enviado en los Procesos Anteriores al <strong>Robot</strong> </span>
        </div>
        <div class="Agend_Buttons">
        <button class="Agend_Limpiar" name="Agend_Limpiar"><i class="fa-solid fa-circle-exclamation"></i> Limpiar Datos Comp</button>
        <?php  
        $Agendar=$_REQUEST["Agend_Button_Agendar"];
        if($aceptacion >=1){
            $_GET["Agend_Button_Agendar"] = flock;
        }
        else{
           echo"";
        }
        ?>
        <button class="Agend_Button_Agendar" name="Agend_Button_Agendar"><i class="fa-solid fa-microchip"></i> Agendar</button>
        <button class="Agend_Salir" name="Agend_Salir"><i class="fa-solid fa-rectangle-xmark"></i> Salir</button>
        
       
        
        </div>

        <div>
        <?php  
    //$edad = $_REQUEST[ "age"];
        
    ?>
        </div>
    </footer>
</body>

</html>