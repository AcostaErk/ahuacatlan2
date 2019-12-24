<?php
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
        <span><h1>LISTADO DE USUARIOS</h1></span>
        <br><br>
        <div class="container">

          <div class="row">
            <div class="col-md-2">Nombre</div>
            <div class="col-md-3">Correo</div>
            <div class="col-md-3">Contrase&ntilde;a</div>
            <div class="col-3">Departamento</div>

          </div>
          <div class="row">
            <div class="col-md-2">Samuel Mojarro Ornelas</div>
            <div class="col-md-3">Samuel-123@hotmail.com</div>
            <div class="col-md-3">1234</div>
            <div class="col-md-3"> Oficial&iacute;a </div>
            <div class="col-3">
              <form action="modificarUsuarioAdm" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value={{ $usuarios->idpersona }}>
                  <CENTER> 
                    <button type="submit" class="btn btn-primary btn-block">Modificar</button>  
                  </CENTER>
              </form>
            </div>
          </div>
        </center> 
       
    </div><!-- //#tc-page-wrapper -->

  </body>

  <?php
  include 'footer.php';
  ?> 

</html>