<?php
//Todo lo de aqui solo es para redireccionar a los diferentes indexes y darle un uso al index normal
  
include 'Controllers\metodosSesion\obtenerValoresSesion.php';//Obtenemos los valores de la sesion

if($rolUsuarioSesion==1)
{
  header("Location: Views/indexOficialia.php");
}else if ($rolUsuarioSesion==2)
{
    header("Location: Views/indexSecretaria.php");
}
else if ($rolUsuarioSesion==3)
{
    header("Location: Views/indexDepartamento.php");
}
else if ($rolUsuarioSesion==4)
{
    header("Location: Views/indexSolicitante.php");
}
else
{
    header("Location: Views/indexFree.php");
}
 ?>
