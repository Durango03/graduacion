<?php

include("conexion.php");

$sentencia = "SELECT Nombre,Contrasena,E-mail,Lugares FROM usuarios";
$resultado = $conexionBD->query($sentencia);


$usuarios=array();

while($fila= mysqli_fetch_assoc($resultado)){
    $usuarios[]=$fila;
}

var_dump($usuarios);

?>