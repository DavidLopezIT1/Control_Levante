
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="complementar.css">
    <title>Form_Factura</title>
</head>
<body>
<header>
    <div class="ruta">
        <h3 class="Links"><a href="index.php"> Variables> </a></h3>
        <h3 class="Links"><a href="fact.php"> Campos de Factura> </a></h3>
        <h3 class="Links"><a href="complementar.php"> Complementar> </a></h3>
        <h3 class="Links"><a href="nuevo_robot.php"> Robot...> </a></h3>
    </div>
    </header>

    <main class="cuerpo_factura">
    <form action="fact.php" method="post">

<fieldset class="form_fact"> 
        <legend>Factura DO BUN-BUNI0211037-001</legend>

    <label for="" class="label_header1">Suc</label>
    <label for="" class="label_header2">DO/Imp</label>
    <label for="" class="label_header3">Nit/CC</label>
    <label for="" class="label_header4">Importador</label>
    <label for="" class="label_header5">Teléfono</label>
    <label for="" class="label_header6">Actividad</label>
    <label for="" class="label_header7">Clase</label>
    <br>
    <input type="text" name="Suc1" class="Suc" value ="BUN" disabled>
    <input type="text" name="DO/Im1" class="DO_Im" value ="BUNI0211037" disabled>
    <input type="text" name="Nit/CC1" class="Nit_CC" value ="19888888" disabled>
    <input type="text" name="Importador1" class="Importador" value ="IMPORTADOR LIMITADO" disabled>
    <input type="text" name="Verificador1" class="Verificador" value ="3" disabled>
    <input type="text" name="Teléfono1" class="Teléfono" value ="3111111" disabled>
    <input type="text" name="Actividad1" class="Actividad" value ="5141" disabled>
    <input type="text" name="Hora1" class="Hora" value ="1" disabled>

    <style>
        .Dec_1{
            color:red;
        }
        .Total_Generado1{
            background-color:white;
            border:solid 1px rgb(93, 93, 93);
            border-radius:3px;
            color:blue;
            text-align:end;
        }
        .Total_Pagado1{
            background-color:white;
            border:solid 1px rgb(93, 93, 93);
            border-radius:3px;
            color:blue;
            text-align:end;
        }
    </style>
    

    
<br>
<div>
    <label for="" class="Total_Generado">Fecha factura</label>
    <label for="" class="Total_Pagado">Numero Factura</label>
    <label for="" class="Radicado_S_XXI">Proveedor</label>
    <label for="Fecha2" class="Fecha2">Moneda</label>
    <label for="Hora2" class="Hora2">Valor Total</label><br>

    <input type="text" name="fecha_factura" class="fecha_factura " Value ="1001282024-01-157656PRU" disabled>
    <input type="text" name="valor_factura" class="valor_factura " Value ="1001287656PRU" disabled>
    <input type="text" name="proveedor" class="proveedor" Value ="PRUEBA_PROVEEDOR" disabled>
    <input type="text" name="moneda" class="moneda" Value ="USD" disabled>
    <input type="text" name="total" class="total" Value ="100,0012,00" disabled>
</div>
<?php 
//Fila 1 del complementar
?>
    
    </fieldset>

    <!--  </form>-->
   <!-- <form action="nuevo_robot.php" method="post"> -->
    <div class="Buttons2">
        
        <input type="submit" value="Guardar" class="Button_Guardar2" name="Guardar">
        <input type="submit" value="Anticipada" class="Button_Anticipada2">
        <input type="submit" value="Salir" class="Button_Salir3">
    </div>
    </form>
    </main>
    
</body>
</html>