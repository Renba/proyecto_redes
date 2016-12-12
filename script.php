<?php
require_once("app/daos/userDao.php");
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$result=getUser("A09002968");
$row = $result->fetch_assoc();

$txt = "Date".date('l jS \of F Y h:i:s A')."\n";
fwrite($myfile, $txt);
fwrite($myfile, $row["name"]);
fclose($myfile);
?>
