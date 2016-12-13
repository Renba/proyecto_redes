<?php
require_once('../daos/deviceDao.php');
$status = "No se pudo eliminar el indicador";
$id = $_POST['id'];
$result = getDevice($id);
$row = $result->fetch_assoc();
$mac = $row["mac_address"];
if(updateDevice($id, 'D')){
  removeMac($mac);
  $status = "ok";
}
echo($status);
