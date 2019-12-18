<?php
session_start();
if(isset($_SESSION["nombreUsuario"])){
$nombreUsuarioSesion=$_SESSION["nombreUsuario"];
$rolUsuarioSesion=$_SESSION["rol"];
}else{
  $nombreUsuarioSesion="";
  $rolUsuarioSesion=0;
}

 ?>
