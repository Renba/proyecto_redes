<?php
require_once('../daos/deviceDao.php');
$status = "No se pudo eliminar el indicador";
$id = $_POST['id'];
$mac = $_POST['mac'];
if(updateDevice($id, 'D')){
  removeMac($mac);
  $status = "ok";
}
echo($status);
