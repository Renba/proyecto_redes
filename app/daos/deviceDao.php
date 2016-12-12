<?php
//incluye el dao con la información de la BD:
include_once 'connection.php';

function saveInfo($matricula, $mac_address, $name)
{
    $sentence_sql = "INSERT INTO devices ( matricula, mac_address, name) VALUES
        ('" . $matricula . "','" . $mac_address . "','" . $name . "');";
    return execute_query($sentence_sql);
}
function getDevices()
{
    $sentence_sql = "SELECT * FROM devices";
    $device = execute_query($sentence_sql);
    return $devices;
}
function getDevice($id)
{
    $sentence_sql = "SELECT * FROM devices WHERE id='$id';";
    $devices = execute_query($sentence_sql);
    return $devices;
}

function getDevicesByMatricula($matricula)
{
    $sentence_sql = "SELECT * FROM devices WHERE matricula='$matricula';";
    $devices = execute_query($sentence_sql);
    return $devices;
}

function deleteDevice($id){
  $sentence_sql = "DELETE FROM devices WHERE id='$id';";
  $result = execute_query($sentence_sql);
  return $result;
}

?>
