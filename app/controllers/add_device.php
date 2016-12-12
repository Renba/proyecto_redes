<?php
$status="No se pudo crear el indicador";
require_once('../daos/deviceDao.php');
$matricula = $_POST["matricula"];
$mac_address = $_POST["mac_address"];
$name = $_POST["name"];
require_once('ssh.php');
if(saveInfo($matricula, $mac_address, $name, 'NR')){
  addMac($mac_address);
  $status= "ok";
}else {
  $status = "Error guardando el dispositivo";
}
echo($status);
