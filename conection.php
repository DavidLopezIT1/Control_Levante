<?php
$conection = musqli_connect("localhost", "root", "Juana101453**", "User-opencomex");

if($conection->connect_errno){
    Die("Conexión Fallida, por favor intente de nuevo" . $conection->connect_errno);
}
else{
    echo "Conexión realizada con Éxito" ;
}
?>