<?php



function dependencia_mostrarTodo()
{
  include 'conexionDB.php';
  //Preparar sentencia con sus parametros
    $cadenaComandoSQL="select * from dependencia";
    $cadenaComandoSQL=$cadenaComandoSQL." where idDependencia>3";
    $sentencia = $conexionDB->prepare($cadenaComandoSQL);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    return $resultado;
}





function dependencia_mostrarPorDependencia($idDepa)
{
include 'conexionDB.php';
//Preparar sentencia con sus parametros
  $cadenaComandoSQL="select * from dependencia";
  $cadenaComandoSQL=$cadenaComandoSQL." where  idDependencia = :idDepa";
  $sentencia = $conexionDB->prepare($cadenaComandoSQL);
  $sentencia->execute(array(':idDepa' =>$idDepa));
  $resultado=$sentencia->fetchAll();
  return $resultado;

}









?>
