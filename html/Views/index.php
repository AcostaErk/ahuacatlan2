<?php
//Todo lo de aqui solo es para redireccionar a los diferentes indexes y darle un uso al index normal
$rol=0;
if($rol==1)
{
  header("Location: indexOficialia.php");
}else if ($rol==2)
{
    header("Location: indexSecretaria.php");
}
else if ($rol==3)
{
    header("Location: indexDepartamento.php");
}
else if ($rol==4)
{
    header("Location: indexSolicitante.php");
}
else
{
    header("Location: indexFree.php");
}
 ?>
