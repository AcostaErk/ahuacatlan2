
<!-- Modales referente a Envios de Solicitudes a otros departamentos desde secretaría -->

<div id="descripcionEnvio" class="modal fade">
    <div class="modal-dialog-editar">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">A&ntilde;adir descripci&oacute;n de env&iacute;o</h4>
            </div>

            <form  action="perfil.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">

                <input type="hidden" name="txtidPersona" value="<?php echo $usuario_id ?>">
                <textarea rows="4" cols="50" coords="" id=""  name="txtDescripcion"  value=""> </textarea>
                <p class="text-warning"><small>No dejar este campo vac&iacute;o.</small></p>
            </div>

            <div class="modal-footer">
          <button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Enviar</button>
        </div>
          </form>
        </div>
    </div>
  </div>
</div>

<!-- Fin Modales referente a Edicion de Departamento -->
