<?php
include 'rutasCarpeta.php'; //sss
include '..\Controllers\metodosSesion\obtenerValoresSesion.php';//Obtenemos los valores de la sesion
if($rolUsuarioSesion!=1){//Comprobamos que podamos accedar aqui
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
      <div class="solicitud" style=" border-color: gray; border:solid; border-radius: 10px">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Llenado de solicitud</h4>
          </div>
          <div class="modal-body">
            <form action="indexSolicitante.php" method="post">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></i></span>
                  <input type="text" class="form-control" name="txtnombre" placeholder="Número de serie" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="txtnombre" placeholder="Nombre completo del solicitante" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                  <input type="text" class="form-control" name="txtTelefono" placeholder="Teléfono del solicitante" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" class="form-control" name="txtcorreoE" placeholder="Correo electrónico del solicitante" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-road"></i></span>
                  <input type="text" class="form-control" name="txtDomicilio" placeholder="Domicilio del problema a reportar" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-building"></i></span>
                  <select  name="" class="custom-select">
                    <option selected>Selecciona la comunidad del problema</option>
                  </select>
                </div>
              </div>
              <div class="form-group" >
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-image"></i> </span>
                   Introduce la fotografía de la solicitud
                  <label for="file-upload" class="subir" style="width: 20%;">
                      <i class="fa fa-cloud-upload"></i> Subir archivo
                  </label>
                  <input id="file-upload" onchange='cambiar()' type="file" style='display: none;' />
                  <div id="info"></div>
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" >Enviar solicitud</button>
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
