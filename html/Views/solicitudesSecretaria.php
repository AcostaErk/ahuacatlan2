<?php
include 'rutasCarpeta.php'; //sss
include '../Controllers/metodosSesion/obtenerValoresSesion.php';//Obtenemos los valores de la sesion
if($rolUsuarioSesion!=2){//Comprobamos que podamos accedar aqui
header("Location: ../index.php");
}

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

      <table class="rwd_auto fontsize" style="width: 80%">
        <thead >
          <tr>
            <th><a href="" >Folio</th>
            <th><a href="" >Estatus</th>
            <th><a href="" >Solicitante</th>
            <th><a href="" >Tel&eacute;fono <br> del solicitante</th>
            <th><a href="" >Comunidad</th>
              <th><a href="" >Ver</th>
            <th><a href="" >Asignar a</th>
            <th><a href="" >Enviar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>00001/01/2020</td>
            <td>Por asignar</td>
            <td>Erik Renato Acosta Cruz</td>
            <td>311 111 11 11</td>
            <td>Ahuacatl&aacute;n</td>
            <form method="POST" action="../Views/verDetalleSolicitud.php" enctype='multipart/form-data'>
              <td><button type="submit" class="btn btn-primary btn-block btn-lg" >Ver detalle</button></td>
            </form>
            <td>
              <select  name="" class="custom-select">
                <option selected>Selecciona el departamento</option>
              </select>
            </td>
            <td><a href="#descripcionEnvio"  style="padding: 5px 10px;" role="button" class="btn btn-large btn-primary" data-toggle="modal">Enviar</a></td>
          </tr>
          <tr>
            <td>00002/01/2020</td>
            <td>Por asignar</td>
            <td>Javier Agustin Ramirez Martinez</td>
            <td>311 111 11 11</td>
            <td>Ahuacatl&aacute;n</td>
            <form method="POST" action="../Views/verDetalleSolicitud.php" enctype='multipart/form-data'>
              <td><button type="submit" class="btn btn-primary btn-block btn-lg" >Ver detalle</button></td>
            </form>
            <td>
              <select  name="" class="custom-select">
                <option selected>Selecciona el departamento</option>
              </select>
            </td>
            <td><a href="#descripcionEnvio"  style="padding: 5px 10px;" role="button" class="btn btn-large btn-primary" data-toggle="modal">Enviar</a></td>
          </tr>
           <tr>
            <td>00002/01/2020</td>
            <td>Por asignar</td>
            <td>Ramón Alfredo Diaz Espinoza</td>
            <td>311 111 11 11</td>
            <td>Ahuacatl&aacute;n</td>
            <form method="POST" action="../Views/verDetalleSolicitud.php" enctype='multipart/form-data'>
              <td><button type="submit" class="btn btn-primary btn-block btn-lg" >Ver detalle</button></td>
            </form>
            <td>
              <select  name="" class="custom-select">
                <option selected>Selecciona el departamento</option>
              </select>
            </td>
            <td><a href="#descripcionEnvio"  style="padding: 5px 10px;" role="button" class="btn btn-large btn-primary" data-toggle="modal">Enviar</a></td>
          </tr>
           <tr>
            <td>00002/01/2020</td>
            <td>Por asignar</td>
            <td>Erik Renato Acosta Cruz</td>
            <td>311 111 11 11</td>
            <td>Ahuacatl&aacute;n</td>
            <form method="POST" action="../Views/verDetalleSolicitud.php" enctype='multipart/form-data'>
              <td><button type="submit" class="btn btn-primary btn-block btn-lg" >Ver detalle</button></td>
            </form>
            <td>
              <select  name="" class="custom-select">
                <option selected>Selecciona el departamento</option>
              </select>
            </td>
            <td><a href="#descripcionEnvio"  style="padding: 5px 10px;" role="button" class="btn btn-large btn-primary" data-toggle="modal">Enviar</a></td>
          </tr>
        </tbody>
      </table>

      </center>

    </div><!-- //#tc-page-wrapper -->

  </body>

  <?php
  include 'footer.php';
  include 'Modales/descripcionEnvio.php';
  ?>

</html>
