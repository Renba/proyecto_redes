<?php
session_start();
require_once("../daos/devicesDao.php");
$result = getDevicesByMatricula($_SESSION["email"]);
$devices = new Array();

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    array_push($devices, $row);
  }
?>
<table class="table">
  <thead>
    <tr>
      <th>Nombre de Dispositivo</th>
      <th>Mac addresss</th>
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
          <button type="button" class="btn btn-danger" onclick="deleteDevice(<?= $device["id"] ?>)">Delete</button>
        </td>
      </tr>

    <?php }    ?>
<?php } ?>
  </tbody>
</table>
