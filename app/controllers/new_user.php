<?php
$matricula = $_POST["matricula"];
$name = $_POST["name"];
$email = $_POST["email"];

require_once("../daos/userDao.php");

if(saveInfo($matricula, $name, $email)){
  header('location: ../views/index.php');
}else{
  header('location: ../views/new_user.php');  
}
