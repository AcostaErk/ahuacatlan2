<?php
session_start();
if (isset($_SESSION["correo"])) {
$sesionCorreo=$_SESSION["correo"];

include $rutaDependiendoPagina;
//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("select * from usuario where correo = :sesionCorreo"
);


$sentencia->execute(array(':sesionCorreo' =>$sesionCorreo));
$resultado=$sentencia->fetchAll();
foreach ($resultado as $row) {
    $nombre= $row['nombre'];
    $fkRol= $row['fkRol'];
    }	
	
	
	
$nombreUsuarioSesion=$nombre;
$rolUsuarioSesion=$fkRol;


} else {
  $nombreUsuarioSesion="";
  $rolUsuarioSesion=0;

}
?>
