<?php
$conexion = mysqli_connect("localhost","root", "","lista");
mysqli_set_charset($conexion, "utf8");
if(!$conexion){
    echo 'error';
}
else{
    echo 'conectado';
}
?>