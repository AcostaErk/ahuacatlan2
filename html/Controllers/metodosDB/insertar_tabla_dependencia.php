<?php
include 'conexionDB.php';

$nombreDependencia=$_POST["txtnombre"];


$paginaRedireccion=$_POST["txtPaginaRedireccion"];


//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("INSERT INTO dependencia (nombre)
VALUES (?)");
$sentencia->bindParam(1, $nombreDependencia);


// insertar una fila
$sentencia->execute();

 header("Location: $paginaRedireccion");
?>
