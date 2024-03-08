<?php
session_start();

if($_SESSION){
    echo"";
}else
    header("location:http://localhost/Control_Levante-master//cierresesiones.php");
    
session_destroy();
$_SESSION = array();
header("location: http://localhost/Control_Levante-master//log-in.php");
?>