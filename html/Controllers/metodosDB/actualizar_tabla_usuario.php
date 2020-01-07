<?php
include 'conexionDB.php';

$idUsuario=$_POST["txtidPersona"];
$seleccion=$_POST["txtCampoSeleccionado"];
$paginaRedireccion="..\..\Views\perfil.php";

if($seleccion=="1"){
$nombre=$_POST["txtUsuario"];	
//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("update  usuario set nombre=? WHERE idUsuario=?");

$sentencia->bindParam(1, $nombre);
$sentencia->bindParam(2, $idUsuario);

// insertar una fila
$sentencia->execute();

} else if($seleccion=="2"){
	
$correo=$_POST["txtCorreo"];	
//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("update  usuario set correo=? WHERE idUsuario=?");

$sentencia->bindParam(1, $correo);
$sentencia->bindParam(2, $idUsuario);
session_start();
$_SESSION["correo"]=$correo;

// insertar una fila
$sentencia->execute();	
} else if($seleccion=="3"){
$password=$_POST["txtContrasena"];	
//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("update  usuario set password=? WHERE idUsuario=?");

$sentencia->bindParam(1, $password);
$sentencia->bindParam(2, $idUsuario);

// insertar una fila
$sentencia->execute();

}



 header("Location: $paginaRedireccion");
?>
