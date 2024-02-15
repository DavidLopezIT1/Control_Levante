<?php
$conection = mysqli_connect("localhost", "root", "Juana101453**", "Login_openComex");

if($conection->connect_errno){
    Die("Conexión Fallida, por favor intente de nuevo" . $conection->connect_errno);
}
else{
    echo "conected";
}
?>