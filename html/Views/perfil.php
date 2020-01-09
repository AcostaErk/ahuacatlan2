<?php
include 'rutasCarpeta.php'; //sss
include '..\Controllers\metodosSesion\obtenerValoresSesion.php';//Obtenemos los valores de la sesion
if($rolUsuarioSesion ==1 or $rolUsuarioSesion==2 or $rolUsuarioSesion==3 or $rolUsuarioSesion==4  ){//Comprobamos que podamos accedar aqui
include '..\Controllers\metodosDB\tabla_usuario.php';

}
else
{
  header("Location: ../index.php");
}

 ?>

<?php
//Seccion de la actualizacion
if(isset($_POST["txtidPersona"])){
  $idUsuario=$_POST["txtidPersona"];


if(isset($_POST["txtUsuario"])) {
  $nombre=$_POST["txtUsuario"];
  usuario_actualizarNombre($idUsuario,$nombre);
} else if(isset($_POST["txtCorreo"])){
  $correo=$_POST["txtCorreo"];
  usuario_actualizarCorreo($idUsuario,$correo);
}else if(isset($_POST["txtContrasena"])){
  $contrasena=$_POST["txtContrasena"];
  usuario_actualizarPassword($idUsuario,$contrasena);
}
 header("Location: perfil.php");
}
//Seccion de insercion
 ?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">

 	<?php
 		 include 'header.php';
 	?>

	<body class="home blog tc-fade-hover-links tc-no-sidebar tc-center-images skin-red tc-sticky-header
	sticky-disabled tc-transparent-on-scroll tc-regular-menu tc-post-list-context" itemscope itemtype="http://schema.org/WebPage">
   	<div id="tc-page-wrap" class="">
			<div id="tc-reset-margin-top" class="container-fluid" style="margin-top:103px">
      </div>
			<div id="customizr-slider-1" class="carousel customizr-slide sliderfinal parallax-wrapper">
        <div id="tc-slider-loader-wrapper-1" class="tc-slider-loader-wrapper">
      		<div class="tc-img-gif-loader">
      		</div>
     			<div class="tc-css-loader tc-mr-loader">
    			</div>
       	</div>
   		</div><!-- /#customizr-slider -->

    	<center>
      <br>
      <div class="modal-dialog" style=" border-color: gray; border:solid; border-radius: 10px">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">
              <?php //Para mostrar el nombre
              if($rolUsuarioSesion!=0){//No mostrar si usario sin registrar
              ?>
                <?php echo $nombreUsuarioSesion ?>
              <?php
              }
              ?>
            </h4>
          </div>

          <?php
            $resultado=usuario_mostrarPorCorreo($_SESSION["correo"]);
            foreach ($resultado as $row) {
              $usuario_id=$row["idUsuario"];
              $usuario_nombre=$row["nombre"];
              $usuario_correo=$row["correo"];
              $usuario_password=$row["password"];
            }
           ?>

          <div class="modal-body">
              <!-- <input type="text"  name="txtPaginaRedireccion" value="../../Views/indexSolicitante.php"> -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="txtnombre" placeholder="<?php echo  $usuario_nombre?>" readonly="true" required="required" style="width: 80%;">
                  <a href="#editarNombre" style="padding: 5px 10px;" role="button" class="btn btn-large btn-primary" data-toggle="modal">&rarr;</a>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" class="form-control" name="txtcorreoE" placeholder="<?php echo $usuario_correo ?>" readonly="true" required="required" style="width: 79%;">
                  <a href="#editarCorreoE" style="padding: 5px 10px;" role="button" class="btn btn-large btn-primary" data-toggle="modal">&rarr;</a>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" name="txtcontrasena"  value="<?php echo  $usuario_password?>" readonly="true" style="width: 79%; color: gray;">
                  <a href="#editarContrasena" style="padding: 5px 10px;" role="button" class="btn btn-large btn-primary" data-toggle="modal">&rarr;</a>
                </div>
              </div>
          </div>
          <div class="modal-footer"> <a href="#"></a>
          </div>
        </div>
      </div>
      <br>
      </center>

    </div><!-- //#tc-page-wrapper -->

  </body>

  <?php
  include 'footer.php';
  include 'Modales/edicionPerfil.php';
  ?>

</html>
