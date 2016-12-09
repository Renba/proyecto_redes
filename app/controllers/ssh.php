<?php
$TargetIP='192.168.69.18';
$TargetUser='rys2016';
$TargetPass='2016RyS';

$MySSH=ssh2_connect($TargetIP);
ssh2_auth_none($MySSH,$TargetUser);
$MyShell=ssh2_shell($MySSH);
sleep(1);
fwrite($MyShell,$TargetUser."\r");
sleep(1);
fwrite($MyShell,$TargetPass."\r");
sleep(1);
fwrite($MyShell,"show serial"."\r");
sleep(1);
while($buffer=fgets($MyShell,4096))
{
  print($buffer);
};
