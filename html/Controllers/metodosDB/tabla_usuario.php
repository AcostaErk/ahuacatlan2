<?php


function usuario_mostrarTodo()
{
      include 'conexionDB.php';
  //Preparar sentencia con sus parametros
    $cadenaComandoSQL="select *  from usuario ";
    $sentencia = $conexionDB->prepare($cadenaComandoSQL);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    return $resultado;
}




function usuario_mostrarPorUsuario($idU)
{
    include 'conexionDB.php';
  //Preparar sentencia con sus parametros
  $cadenaComandoSQL="select * from usuario ";
  $cadenaComandoSQL=$cadenaComandoSQL." where  idUsuario = :idU";
  $sentencia = $conexionDB->prepare($cadenaComandoSQL);
  $sentencia->execute(array(':idU' =>$idU));
  $resultado=$sentencia->fetchAll();
  return $resultado;

}



function usuario_mostrarPorDependencia($idDepa)
{
      include 'conexionDB.php';
  //Preparar sentencia con sus parametros
  $cadenaComandoSQL="select * from usuario ";
  $cadenaComandoSQL=$cadenaComandoSQL." where  fkDependencia = :idDepa ";
  $sentencia = $conexionDB->prepare($cadenaComandoSQL);
  $sentencia->execute(array(':idDepa' =>$idDepa));
  $resultado=$sentencia->fetchAll();
  return $resultado;
}


?>
