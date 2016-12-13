<?php
session_start();
$matricula = $_SESSION["email"];
$name = $_POST["name"];
$email = $_POST["email"];

require_once("../daos/userDao.php");

if(updateUser($matricula, $name, $email)){
  header('location: ../views/index.php');
}else{
  header('location: ../views/edit_user.php');
}
