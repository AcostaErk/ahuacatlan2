<?php
include("conexion.php");
$correo=$_POST['correo'];
$pass=$_POST['pass'];
 $login = $conn->prepare("SELECT * FROM usuarios where correoelectronico=?");  //se realiza la consulta de los datos del usuario
$login->execute(array($correo)); //se ejecuta la consulta
$resultado = $login->fetchAll(); //se obtienen los datos de la consulta
$totalUsuarios=$login->rowCount(); //se cuenta el numero de registros
if($totalUsuarios>0){
	foreach ($resultado as $User) { //se extraen los datos
		$idUsuarios=$User['idusuario'];
		$contraseña=$User['contrasena'];
		$idDependencia=$User['iddependencia'];
		$idRol=$User['idrol'];
	}
	include("decodificacion.php"); // se incluye el archivo de desencriptacion
    $Contradesencriptada=decodificar($contraseña); //se ejecuta la funcion de desencriptar
	  if($pass==$Contradesencriptada){//compara la contraseña ingresada con aquella que obtuvimos de la BD, si entra, asigna las cookies del usuario
	  	$deleteOldToken = $conn->prepare('DELETE FROM tokensesion WHERE idusuario = :idUsuario;');  //se prepara delete del token previo del usuario
		$deleteOldToken->bindParam(':idUsuario',$idUsuarios);//asignacion de variables
		$deleteOldToken->execute();
		$token = bin2hex(random_bytes(20)); //Genera un token aleatorio con longitud de 20 caracteres
		$date = strtotime("+30 day"); //calcula la fecha actual y le agrega 30 días para obtener la vigencia de la sesión, modificar el 30 por el número deseado si se requiere
		$insertToken = $conn->prepare('INSERT INTO tokensesion VALUES (:token,:idusuario,:date) ;');  //se prepara inserción de el token de sesion a la BD
		$insertToken->bindParam(':token',$token); //liga de parametros
		$insertToken->bindParam(':idusuario',$idUsuarios);
		$insertToken->bindParam(':date',date('Y-m-d', $date));//fin liga de parametros
		$insertToken->execute(); //se ejecuta la inserción
		$cookie_name = "token";
		$cookie_value = $token;
		if ($_POST ['mantener']=="si"){//entra si el usuario selecciona mantener la sesión iniciada en el equipo, dandole una vigencia de 1 mes
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		}
		if ($_POST ['mantener']=="no"){
			setcookie($cookie_name, $cookie_value, 0, "/");//opción por default, la cookie se borra al cerrar el navegador
		  }
		if ($idRol==1)
		{
		header("Location: indexAdministrador.php");//Manda al usuario a la página principal del sitio, con estado 1 (sesión iniciada)
	    }
	    elseif ($idRol==2) {
	    header("Location: indexContraloria.php");
	    }
	    elseif ($idRol==3) {
	    header("Location: indexDirecciones.php");
	    }
	    else
	    {
	    header("Location:indexRegidores.php");
	    }
	}else{
		header("Location: login.php?error=2");//Regresa al usuario al login con el índice de error que indica contraseña incorrecta
	}
}else{
	header("Location: login.php?error=1");//Regresa al usuario al login con el índice de error que indica que el usuario no existe
}
?>
