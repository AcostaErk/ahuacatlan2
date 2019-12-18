<?php
include 'conexionDB.php';

$correo=$_POST["txtCorreoE"];
$password=$_POST["txtContrasena"];




//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("select * from usuario where correo = :correo and password = :password "
);


$sentencia->execute(array(':correo' => $correo,':password' => $password));
$resultado=$sentencia->fetchAll();
foreach ($resultado as $row) {
    $nombre= $row['nombre'];
    $fkRol= $row['fkRol'];


    }

if($nombre!="" and $fkRol!=""){
  include '..\metodosSesion\crearSesion.php';
  header("Location: ../index.php");
} else{
header("Location: ../login.php");
}
?>
