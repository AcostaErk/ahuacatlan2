<!-- Modales referente a Edicion de Usuario -->
<div id="editarNombre" class="modal fade">
    <div class="modal-dialog-editar">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Editar Nombre</h4>
            </div>

            <form  action="perfil.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">

                <input type="hidden" name="txtidPersona" value="<?php echo $usuario_id ?>">
                <input id="" type="text" name="txtUsuario"  value="<?php echo $usuario_nombre ?>" autofocus="value"  pattern="[A-Za-z\s]+" required="" maxlength="45" onkeypress="">
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

            <form  action="perfil.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <input type="hidden" name="txtidPersona" value="<?php echo $usuario_id ?>">
                <input id="" type="email" name="txtCorreo"  value="<?php echo $usuario_correo ?>" autofocus="value"   required="" maxlength="" onkeypress="">
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

           <form  action="perfil.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <input type="hidden" name="txtidPersona" value="<?php echo $usuario_id ?>">
                <input id=""type="text" name="txtContrasena"  value="<?php echo $usuario_password ?>" autofocus="value"  pattern="[A-Za-z0-9\s]+" required="" maxlength="" onkeypress="">
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
