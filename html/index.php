<?php $tituloPagina="Principal" ?>
<?php include 'getInfo.php'; ?>
<?php
  include 'header.php';
  ?>

  <div class="container">
    <div class="row justify-content-center text-center text-md-left">
        <div class="container" align="center">
            <div class="alert alert-success" role="alert">
               Login exitoso. ¡Bienvenido!. Está loggeado como: <?php echo $Nombre //la información de la BD se llama a traves del nombre de la variable en la clase getInfo?>
            </div>
        </div>

      <div class="col-12 col-md-4 mt-4 mt-md-0">
        Texto y cuerpo aquí
      </div>
    </div>
  </div>
<?php
  include 'footer.php'
?>
