<?php
require_once('../daos/deviceDao.php');
$status = "No se pudo eliminar el indicador";
$id = $_POST['id'];
if(deleteDevice($id)){
  $status = "ok";
}
echo($status);
