<?php
/*
$conection = mysqli_connect("localhost", "root", "Juana101453**", "Login_openComex");

if($conection->connect_errno){
    Die("Conexión Fallida, por favor intente de nuevo" . $conection->connect_errno);
}
else{
    echo "conected";
}*/

$conection = mysqli_connect("localhost", "root", "", "general");

if($conection->connect_errno){
    //$errorDeConexion = connect_errno;
    die ("Conección Fallida" . $conection->connect_errno);
}else{
    echo "Conexión Exitosa!";
}
?>