<?php session_start(); ?>
<div class="col-lg-6">
  <form id="form">
    <input type="text" class="form-control"  name="matricula" value="<?= $_SESSION["email"]?>">

    <div class="form-group">
      <label for="formGroupExampleInput">Nombre de Dispositivo</label>
      <input type="text" class="form-control"  name="name" placeholder="Nombre" required>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Mac Address</label>
      <input type="text" class="form-control"  name="mac_address" placeholder="xx:xx:xx:xx:xx:xx" required>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit"
    onclick="createDevice(); return false;">Guardar</button>

  </form>
  <div id="notice">

  </div>
</div>
