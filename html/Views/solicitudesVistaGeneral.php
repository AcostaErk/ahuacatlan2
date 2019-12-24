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
      <br>

      <table class="rwd_auto fontsize" style="width: 80%">
        <thead>
          <tr>
            <th><a href="" style="color: gray ;">Oficial&iacute;a</button></th>
            <th><a href="" style="color: gray ;">Secretar&iacute;a</button></th>
            <th><a href="" style="color: gray ;">Departamento 1</button></th>
            <th><a href="" style="color: gray ;">Departamento 2</button></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>99</td>
            <td>80</td>
            <td>15</td>
            <td>5</td>
          </tr>
        </tbody>

        <thead>
          <tr>
            <th><a href="" style="color: gray ;">Departamento 3</button></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>99</td>
          </tr>
        </tbody>
      </table>
    
      <br>
      </center>

    </div><!-- //#tc-page-wrapper -->

  </body>

  <?php
  include 'footer.php';
  ?> 

</html>