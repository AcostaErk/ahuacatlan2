<?php
include 'conexionDB.php';



 include $rutaDependiendoPagina;

//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("select * from usuario where correo = :sesionCorreo "
);


$sentencia->execute(array(':sesionCorreo' =>$sesionCorreo));
$resultado=$sentencia->fetchAll();
foreach ($resultado as $row) {
    $nombre_Usuario= $row['nombre'];
    $idUsuario_Usuario= $row['idUsuario'];
	$password_Usuario=$row['password'];
	$correo_Usuario=$row['correo'];


    }	
	
	
?>
