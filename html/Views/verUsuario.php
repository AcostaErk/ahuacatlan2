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
    <div id="tc-page-wrap">
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
          <table class="rwd_auto fontsize" style="width: 80%">
            <thead>
              <tr>
               <th><a href="" style="color: gray ;">Nombre</button></th>
               <th><a href="" style="color: gray ;">Correo</button></th>
               <th><a href="" style="color: gray ;">Contrase&ntilde;a</button></th>
               <th><a href="" style="color: gray ;"></button></th>
               <th><a href="" style="color: gray ;"></button></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Samuel Mojarro Ornelas</td>
                <td>Samuel-123@hotmail.com</td>
                <td>1234</td>
                <td><button type="submit" class="btn btn-primary btn-block">Modificar</button></td>
                <td><button type="submit" class="btn btn-primary btn-block">Eliminar</button></td>
              </tr>
            </tbody>
             <tbody>
              <tr>
                <td>Javier Ramirez Hernandez</td>
                <td>Chubi-123@hotmail.com</td>
                <td>56321</td>
                <td><button type="submit" class="btn btn-primary btn-block">Modificar</button></td>
                <td><button type="submit" class="btn btn-primary btn-block">Eliminar</button></td>
              </tr>
            </tbody>
             <tbody>
              <tr>
                <td>Juan Ramon del Rosarios</td>
                <td>JuanRamonR_6@hotmail.com</td>
                <td>juan123</td>
                <td><button type="submit" class="btn btn-primary btn-block">Modificar</button></td>
                <td><button type="submit" class="btn btn-primary btn-block">Eliminar</button></td>
              </tr>
            </tbody>
      </table>
    </center> 
       
    </div><!-- //#tc-page-wrapper -->

  </body>

  <?php
  include 'footer.php';
  ?> 

</html>