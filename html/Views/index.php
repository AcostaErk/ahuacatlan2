<?php
//Todo lo de aqui solo es para redireccionar a los diferentes indexes y darle un uso al index normal
  
include 'metodosSesion\obtenerValoresSesion.php';//Obtenemos los valores de la sesion

if($rolUsuarioSesion==1)
{
  header("Location: indexOficialia.php");
}else if ($rolUsuarioSesion==2)
{
    header("Location: indexSecretaria.php");
}
else if ($rolUsuarioSesion==3)
{
    header("Location: indexDepartamento.php");
}
else if ($rolUsuarioSesion==4)
{
    header("Location: indexSolicitante.php");
}
else
{
    header("Location: indexFree.php");
}
 ?>
