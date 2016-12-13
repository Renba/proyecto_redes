<?php
require_once('../daos/deviceDao.php');
$status = "No se pudo eliminar el indicador";
$id = $_POST['id'];
$result = getDevice($id);
$row = $result->fetch_assoc();
$mac = $row["mac_address"];
require_once('ssh.php');

if(deleteDevice($id){
  removeMac($mac);
  $status = "ok";
}
echo($status);
