<?php
include 'rutasCarpeta.php'; //sss
include '..\Controllers\metodosSesion\obtenerValoresSesion.php';//Obtenemos los valores de la sesion
if($rolUsuarioSesion==1 or $rolUsuarioSesion==2 ){//Comprobamos que podamos accedar aqui

}
else
{
  header("Location: ../index.php");
}
?>

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
            <h4 class="modal-title">Datos de la solicitud</h4>
          </div>
          <div class="modal-body">
            <form action="javascript:history.back(-1);" method="post">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></i></span>
                  <input type="text" class="form-control" name="txtnombre" value="00001/01/2020" readonly="true" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="txtnombre" value="Erik Renato Acosta Cruz" readonly="true"required="required" style="width: 90%;">
                </div> 
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                  <input type="text" class="form-control" name="txtTelefono" value="311 111 11 11" readonly="true" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input type="text" class="form-control" name="txtcorreoE" value="erik_ac@gmail.com" readonly="true" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-road"></i></span>
                  <input type="text" class="form-control" name="txtDomicilio" value="Calle: Juarez #312 Col. Monumento" readonly="true" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-road"></i></span>
                  <input type="text" class="form-control" name="txtComunidad" value="Ahuacatlán" readonly="true" required="required" style="width: 90%;">
                </div>
              </div>
              <div class="form-group" >
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-image"></i> </span>
                  <img src="mi_archivo.png" alt="Imagen de la solicitud">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" >Volver</button>
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
