<?php

$conexion = mysqli_connect("localhost", "root", "", "pw_grupo04");
header('Access-Control-Allow-Origin: *'); 
mysqli_query($conexion, 'SET NAMES utf8');

if($conexion){
    //echo "funciona";
} else {
    //echo "no funciona";
}

?>