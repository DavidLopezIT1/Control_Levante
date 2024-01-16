
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="complementar.css">
    <title>Complementar</title>
</head>
<body>

<header>
    <div class="ruta">
        <h3 class="Links"><a href="index.php"> Variables> </a></h3>
        <h3 class="Links"><a href="fact.php"> Campos de Factura> </a></h3>
        <h3 class="Links"><a href="complementar.php"> Complementar> </a></h3>
        <h3 class="Links"><a href="nuevo_robot.php"> Robot...> </a></h3>
    </div>

<form action="nuevo_robot.php" class="form1" method="get">

<fieldset> 
        <legend>Complementar DO BUN-BUNI0211037-001</legend>

    <label for="Suc1" class="label_header1">Suc</label>
    <label for="DO/Im1" class="label_header2">DO/Imp</label>
    <label for="Nit/CC1" class="label_header3">Nit/CC</label>
    <label for="Hora1" class="label_header4">Importador</label>
    <label for="Teléfono1" class="label_header5">Teléfono</label>
    <label for="Actividad1" class="label_header6">Actividad</label>
    <label for="Hora1" class="label_header7">Clase</label>
    
    <br>
    <input type="text" name="Suc1" class="Suc" value ="BUN" disabled>
    <input type="text" name="DO/Im1" class="DO_Im" value ="BUNI0211037" disabled>
    <input type="text" name="Nit/CC1" class="Nit_CC" value ="19888888" disabled>
    <input type="text" name="Importador1" class="Importador" value ="IMPORTADOR LIMITADO" disabled>
    <input type="text" name="Verificador1" class="Verificador" value ="3" disabled>
    <input type="text" name="Teléfono1" class="Teléfono" value ="3111111" disabled>
    <input type="text" name="Actividad1" class="Actividad" value ="5141" disabled>
    <input type="text" name="Hora1" class="Hora" value ="1" disabled>

</fieldset>
</form>
<input type="submit" value="Salir" class="Button_Salir2">

</header>

<main>
    <style>
        .Dec_1{
            color:red;
        }
        .Total_Generado1{
            background-color:white;
            border:solid 1px rgb(93, 93, 93);;
            border-radius:3px;
            color:blue;
            text-align:end;
        }
        .Total_Pagado1{
            background-color:white;
            border:solid 1px rgb(93, 93, 93);;
            border-radius:3px;
            color:blue;
            text-align:end;
        }
    </style>
    <form action="nuevo_robot.php" class="form2" method="post">

    <fieldset> 
        <legend>Declaración <span class="Dec_1">1</span></legend>

    <label for="Total_Generado" class="Total_Generado">Total Generado</label>
    <label for="Total_Pagado" class="Total_Pagado">Total Pagado</label>
    <label for="Radicado_S_XXI" class="Radicado_S_XXI"># Radicado S XXI</label>

   
    <label for="Fecha2" class="Fecha2">Fecha</label>
    <label for="Hora2" class="Hora2">Hora</label><br>

    <input type="text" name="Total_Generado" class="Total_Generado1" value="27,564,000" disabled>
    <input type="text" name="Total_Pagado" class="Total_Pagado1" value="27,564,000" disabled>
    <input type="text" name="Radicado_S_XXI" class="Radicado_S_XXI1">
    <input type="text" name="Fecha2" class="Fecha21">
    <input type="text" name="Hora2" class="Hora21">
<?php 
//Fila 1 del complementar
?>
    <label for="Aceptacion" class="Aceptacion_Comp">Aceptación</label>
    <label for="Fecha" class="Fecha_Comp">Fecha</label>
    <label for="Hora" class="Hora_Comp">Hora</label>
    <label for="Autodhesivo" class="Autodhesivo_Comp">Autoadhesivo</label>
    <label for="Fecha" class="Fecha2_Comp">Fecha</label>
    <label for="Hora" class="Hora2_Comp">Hora</label><br>

    <input type="text" name="Aceptación" class="Aceptacion" id="Aceptacion">
    <?php  
    //$edad = $_REQUEST[ "age"];
       // $aceptacion = $_REQUEST["Aceptacion"];
       // echo $aceptacion;
    ?>
    <input type="text" name="Fecha3" class="Fecha3">
    <input type="text" name="Hora3" class="Hora3">
    <input type="text" name="Autoadhesivo" class="Autodhesivo">
    <input type="text" name="Fecha4" class="Fecha3">
    <input type="text" name="Hora4" class="Hora3">

    </fieldset>

    <!--  </form>-->
   <!-- <form action="nuevo_robot.php" method="post"> -->
    <div class="Buttons">
        
        <input type="submit" value="Guardar" class="Button_Guardar" name="Guardar">
        <input type="submit" value="Anticipada" class="Button_Anticipada">
        <input type="submit" value="Salir" class="Button_Salir">
    </div>
    </form>
    </main>

    <footer>

    </footer>
</body>
</html>