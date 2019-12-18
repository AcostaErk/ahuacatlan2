<?php
include 'conexionDB.php';

$correo=$_POST["txtcorreoE"];
$nombre=$_POST["txtnombre"];
$password=$_POST["txtcontrasena"];

$paginaRedireccion=$_POST["txtPaginaRedireccion"];
if(strpos($paginaRedireccion, 'indexSolicitante')==true){
  $fkDependencia=1;
  $fkRol=4;
}

//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("INSERT INTO usuario (correo, nombre,password,fkDependencia,fkRol)
VALUES (?, ?,?,?,?)");
$sentencia->bindParam(1, $correo);
$sentencia->bindParam(2, $nombre);
$sentencia->bindParam(3, $password);
$sentencia->bindParam(4, $fkDependencia);
$sentencia->bindParam(5, $fkRol);

// insertar una fila
$sentencia->execute();
include '..\metodosSesion\crearSesion.php';
 header("Location: $paginaRedireccion");
?>
