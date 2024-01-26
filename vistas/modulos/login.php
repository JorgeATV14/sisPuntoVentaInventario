<div id="back"></div>
<div class="login-box" style="display: flex; flex-direction:column; ">
  <div class="login-logo" style="margin-bottom: 0px;">
    <img src="vistas/img/plantilla/MI RANCHITO.png" style="width: 100%; display: inline; " class="img-login">
  </div>
  <div class="login-box-body" style="border-radius: 0px 0px 10px 10px ;">
    <h3 class="login-box-msg" style="color:black;">Ingresar al sistema</h3>
    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-warning btn-block btn-rounded" style="background-color: #f37312; border-radius: 10px ;">Ingresar</button>
        </div>
      </div>
      <?php
      $login = new ControladorUsuarios();
      $login->ctrIngresoUsuario();
      ?>
    </form>
  </div>
</div>

