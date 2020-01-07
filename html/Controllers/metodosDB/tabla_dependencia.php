<?php
include 'conexionDB.php';



 include $rutaDependiendoPagina;

//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("select * from dependencia ");


$sentencia->execute();
$resultado=$sentencia->fetchAll();



?>
