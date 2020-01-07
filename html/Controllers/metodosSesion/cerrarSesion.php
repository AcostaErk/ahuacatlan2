<?php
session_start();

$_SESSION["correo"]="";
unset($_SESSION["correo"]);



header("Location: ../../index.php");
 ?>
