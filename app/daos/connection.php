<?php
define('SERVER'		 ,'localhost');
define('USER'		 ,'root');
define('PASSWORD'	 ,'2016rys#.');
define('DB_NAME'	 ,'proyecto_redes');
function execute_query($query){
  $connection = mysqli_connect(SERVER, USER, PASSWORD, DB_NAME) or die ("Error " . mysqli_error($connection));
  return mysqli_query($connection, $query);
}
function getConnection(){
  $connection = mysqli_connect(SERVER, USER, PASSWORD, DB_NAME) or die ("Error " . mysqli_error($connection));
  return $connection;
}
