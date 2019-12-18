
<!-- Modal / Ventana / Overlay en HTML -->
<div id="iniciarSesion" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Iniciar Sesi&oacute;n</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="/examples/actions/confirmation.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Correo electrónico" required="required" style="width: 90%;">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required" style="width: 90%;">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" >Ingresar</button>
          </div>
          <p class="hint-text"><a href="#">Olvidaste tu contrase&ntilde;a&#63;</a></p>
        </form>
      </div>
      <div class="modal-footer">No te has registrado a&uacute;n&#63; <a href="#">Hazlo ahora</a>
      </div>
    </div>
  </div>
</div>
