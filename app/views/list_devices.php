<?php
session_start();
require_once("../daos/deviceDao.php");
$result = getDevicesByMatricula($_SESSION["email"]);
$devices = array();

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    array_push($devices, $row);
  }
}
?>
<table class="table">
  <thead>
    <tr>
      <th>Nombre de Dispositivo</th>
      <th>Mac addresss</th>
      <th>Estado</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody id="body">

<?php if(count($devices) > 0) { ?>
    <?php foreach ($devices as $device) {?>
      <tr>
        <td>
          <?= $device["name"] ?>
        </td>
        <td>
          <?= $device["mac_address"] ?>
        </td>
        <td>
          <?= $device["status"] ?>
        </td>

        <td>
          <button type="button" class="btn btn-danger" onclick="deleteDevice(<?= $device["id"] ?>,<?= $device["mac_address"]?>)">Delete</button>
        </td>
      </tr>

    <?php }    ?>
<?php } ?>
  </tbody>
</table>
