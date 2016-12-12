<?php
$status="No se pudo crear el indicador";
require_once('../daos/deviceDao.php');
if(saveInfo($matricula, $mac_address, $name)){
  $status= "ok";
}else {
  $status = "ya existe ese usuario";
}
echo($status);
