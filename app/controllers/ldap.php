<?php
echo "<h3>Consulta de prueba LDAP</h3>";
echo "Conectando ...";
$base = "ou=Facultad de Matematicas, ou=INET, dc=inet, dc=uady, dc=mx";
$host = "ldap://148.209.67.42";
$port = 389;
$user = "A09002968";
$pass = "Toto2000.";
$user_dn = "uid=".$user;
#$criteria = '(sAMAccountName=%s)' %username
#$attributes = ['*'];

$ldapconn = ldap_connect($host, $port)
    or die("Could not connect to LDAP server.");

if ($ldapconn) {

    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $user.'@inet.uady.mx', $pass);

    // verify binding
    if ($ldapbind) {
        echo "LDAP bind successful...";
    } else {
        echo "LDAP bind failed...";
    }

}

?>
