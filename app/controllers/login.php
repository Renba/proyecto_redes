<?php
require_once("../daos/userDao.php");

session_start();
$_SESSION["valid"] = false;
$_SESSION["email"] = "";

$host = "ldap://148.209.67.42";
$port = 389;

$user_email=$_POST['email'];
$password=$_POST['password'];
$status = "";
$ldapconn = ldap_connect($host, $port)
    or die("Could not connect to LDAP server.");

if($status == ""){
  $ldapbind = ldap_bind($ldapconn, $user_email.'@inet.uady.mx', $password);

  if($ldapbind){
    $_SESSION["valid"] = true;
    $_SESSION["email"] = $user_email;
    $status = "new";
    $result= getUser($_SESSION["email"]);
    if($result->num_rows > 0){
      $status = "ok";
    }
  }else{
      $status = "No existe el usuario con ese usuario y contraseña";
  }
  echo($status);
}
?>
