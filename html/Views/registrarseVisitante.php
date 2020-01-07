<?php
include 'rutasCarpeta.php'; //sss
include '..\Controllers\metodosSesion\obtenerValoresSesion.php';//Obtenemos los valores de la sesion
 ?>

<?php
//Seccion de la insercion
if( isset($_POST["txtcorreoE"]) and isset($_POST["txtnombre"]) and  isset($_POST["txtcontrasena"]) ){
include '..\Controllers\metodosDB\tabla_usuario.php';

$correo=$_POST["txtcorreoE"];
$nombre=$_POST["txtnombre"];
$password=$_POST["txtcontrasena"];
$fkDependencia=1;
$fkRol=4;
usuario_insertarVisitante($correo,$nombre,$password,$fkDependencia,$fkRol);
include '..\Controllers\metodosSesion\crearSesion.php';
header("Location: ../index.php");
}
//
 ?>

<!DOCTYPE html>
<html class="no-js" lang="es-ES">

 	<?php
 		 include 'header.php';
 	?>

	<body class="home blog tc-fade-hover-links tc-no-sidebar tc-center-images skin-red tc-sticky-header sticky-disabled tc-transparent-on-scroll tc-regular-menu tc-post-list-context" itemscope itemtype="http://schema.org/WebPage">
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
            <h4 class="modal-title">Registrarse</h4>
          </div>
          <div class="modal-body">
            <form action="registrarseVisitante.php" method="post">
              <input type="hidden"  name="txtPaginaRedireccion" value="../../Views/indexSolicitante.php">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="txtnombre" placeholder="Nombre completo" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" class="form-control" name="txtcorreoE" placeholder="Correo electrónico" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" name="txtcontrasena" placeholder="Contraseña" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" >Registrarse</button>
              </div>
            </form>
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
  ?>

</html>
