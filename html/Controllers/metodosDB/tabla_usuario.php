<?php

function usuario_insertarVisitante($correo,$nombre,$password,$fkDependencia,$fkRol){
  include 'conexionDB.php';
  //Preparar sentencia con sus parametros
  $sentencia = $conexionDB->prepare("INSERT INTO usuario (correo, nombre,password,fkDependencia,fkRol)
  VALUES (?, ?,?,?,?)");
  $sentencia->bindParam(1, $correo);
  $sentencia->bindParam(2, $nombre);
  $sentencia->bindParam(3, $password);
  $sentencia->bindParam(4, $fkDependencia);
  $sentencia->bindParam(5, $fkRol);

  // insertar una fila
  $sentencia->execute();

}

function usuario_actualizarNombre($idUsuario,$nombre){
  include 'conexionDB.php';
//Preparar sentencia con sus parametros
  $sentencia = $conexionDB->prepare("update  usuario set nombre=? WHERE idUsuario=?");
  $sentencia->bindParam(1, $nombre);
  $sentencia->bindParam(2, $idUsuario);

  $sentencia->execute();

}

function usuario_actualizarCorreo($idUsuario,$correo){
  include 'conexionDB.php';
//Preparar sentencia con sus parametros
$sentencia = $conexionDB->prepare("update  usuario set correo=? WHERE idUsuario=?");
$sentencia->bindParam(1, $correo);
$sentencia->bindParam(2, $idUsuario);

session_start();
$_SESSION["correo"]=$correo;

  $sentencia->execute();

}


function usuario_actualizarPassword($idUsuario,$password){
  include 'conexionDB.php';
  //Preparar sentencia con sus parametros
  $sentencia = $conexionDB->prepare("update  usuario set password=? WHERE idUsuario=?");
  $sentencia->bindParam(1, $password);
  $sentencia->bindParam(2, $idUsuario);

  $sentencia->execute();

}

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

function usuario_mostrarPorCorreo($correo)
{
    include 'conexionDB.php';
  //Preparar sentencia con sus parametros
  $cadenaComandoSQL="select * from usuario ";
  $cadenaComandoSQL=$cadenaComandoSQL." where  correo = :correo";
  $sentencia = $conexionDB->prepare($cadenaComandoSQL);
  $sentencia->execute(array(':correo' =>$correo));
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


function usuario_Login($correo,$password) {
  include 'conexionDB.php';

  //Preparar sentencia con sus parametros
  $sentencia = $conexionDB->prepare("select * from usuario where correo = :correo and
   password = :password ");

  $sentencia->execute(array(':correo' => $correo,':password' => $password));
  $resultado=$sentencia->fetchAll();
  return $resultado;
}



?>
