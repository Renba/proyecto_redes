<?php
require_once('../daos/deviceDao.php');
$status = "No se pudo eliminar el indicador";
$id = $_POST['id'];
if(updateDevice($id, 'D')){
  $status = "ok";
}
echo($status);
