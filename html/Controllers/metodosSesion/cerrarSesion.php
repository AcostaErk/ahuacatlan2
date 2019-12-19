<?php
session_start();

$_SESSION["nombreUsuario"]="";
unset($_SESSION["nombreUsuario"]);

$_SESSION["rol"]=0;
unset($_SESSION["rol"]);

header("Location: ../../index.php");
 ?>
