<!-- Modal / Ventana / Overlay en HTML -->

<!-- Modales referente a Edicion de Usuario -->
<div id="editarNombre" class="modal fade">
    <div class="modal-dialog-editar">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Editar Nombre</h4>
            </div>

            <form  action="../Controllers/metodosDB/actualizar_tabla_usuario.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">
			   <input type="hidden" name="txtCampoSeleccionado" value="1">
                <input type="hidden" name="txtidPersona" value="<?php echo $idUsuario_Usuario ?>">
                <input id="" type="text" name="txtUsuario"  value="<?php echo $nombre_Usuario ?>" autofocus="value"  pattern="[A-Za-z\s]+" required="" maxlength="45" onkeypress="">
                <p class="text-warning"><small>No dejar este campo vac&iacute;o.</small></p>
            </div>

            <div class="modal-footer">
          <button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
        </div>
          </form>
        </div>
    </div>
  </div>
</div>

<div id="editarCorreoE" class="modal fade">
    <div class="modal-dialog-editar">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Editar Correo Electr&oacute;nico</h4>
            </div>

            <form  action="../Controllers/metodosDB/actualizar_tabla_usuario.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">
			   <input type="hidden" name="txtCampoSeleccionado" value="2">
                <input type="hidden" name="txtidPersona" value="<?php echo $idUsuario_Usuario ?>">
                <input id="" type="email" name="txtCorreo"  value="<?php echo $correo_Usuario ?>" autofocus="value"   required="" maxlength="" onkeypress="">
                <p class="text-warning"><small>No dejar este campo vac&iacute;o.</small></p>
            </div>

            <div class="modal-footer">
          <button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
        </div>
          </form>
        </div>
    </div>
  </div>
</div>

<div id="editarContrasena" class="modal fade">
    <div class="modal-dialog-editar">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Editar Contrase&ntilde;a</h4>
            </div>

           <form  action="../Controllers/metodosDB/actualizar_tabla_usuario.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">
			  <input type="hidden" name="txtCampoSeleccionado" value="3">
                <input type="hidden" name="txtidPersona" value="<?php echo $idUsuario_Usuario ?>">
                <input id=""type="password" name="txtContrasena"  value="<?php echo $password_Usuario ?>" autofocus="value"  pattern="[A-Za-z0-9\s]+" required="" maxlength="" onkeypress="">
                <p class="text-warning"><small>No dejar este campo vac&iacute;o.</small></p>
            </div>

            <div class="modal-footer">
          <button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
        </div>
          </form>
        </div>
    </div>
  </div>
</div>
<!--Fin Modales referente a Edicion de Usuario -->

<div id="usuarioContraInvalidas" class="modal fade">
    <div class="modal-dialog-editar">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Error</h4>
            </div>

            <form  action="" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                Correo electr&oacute;nico o contrase&ntilde;a inv&aacute;lidos
                <p class="text-warning"><small>No dejar este campo vac&iacute;o.</small></p>
            </div>

            <div class="modal-footer">
          <button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
        </div>
          </form>
        </div>
    </div>
  </div>
</div>

<div id="editarNombreDepartamento" class="modal fade">
    <div class="modal-dialog-editar">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Editar Nombre del Departamento</h4>
            </div>

            <form  action="" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <input type="hidden" name="txtIdDepartamento" value="">
                <input id=""type="text" name="txtNombre"  value="" autofocus="value"  required="" maxlength="" onkeypress="">
                <p class="text-warning"><small>No dejar este campo vac&iacute;o.</small></p>
            </div>

            <div class="modal-footer">
          <button id="button" class="btn btn-primary" style="background-color: #003669; color: white;">Guardar Cambios</button>
        </div>
          </form>
        </div>
    </div>
  </div>
</div>
