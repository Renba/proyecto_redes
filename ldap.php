<?php
echo "<h3>Consulta de prueba LDAP</h3>";
echo "Conectando ...";
$ds=ldap_connect("148.209.67.42");  // Debe ser un servidor LDAP válido!
echo "El resultado de la conexión es " . $ds . "<br />";

if ($ds) {
    echo "Vinculando ...";
    $base = "ou=Facultad de Matematicas, ou=INET, dc=inet, dc=uady, dc=mx";
    $r=ldap_bind($ds,'A09002968','Toto2000.');     // Esta es una vinculación "anónima", tipicamente
                           // con acceso de sólo lectura.
    echo "El resultado de la vinculación es " . $r . "<br />";

    echo "Buscando (sn=S*) ...";
    // Busca la entrada de apellidos
    $sr=ldap_search($ds, $base);
    echo "El resultado de la búsqueda es " . $sr . "<br />";

    echo "El número de entradas devueltas es " . ldap_count_entries($ds, $sr) . "<br />";

    echo "Obteniendo entradas ...<p>";
    $info = ldap_get_entries($ds, $sr);
    echo "Los datos para " . $info["count"] . " objetos devueltos:<p>";

    for ($i=0; $i<$info["count"]; $i++) {
        echo "El dn es: " . $info[$i]["dn"] . "<br />";
        echo "La primera entrada cn es: " . $info[$i]["cn"][0] . "<br />";
    }

    echo "Cerando la conexión";
    ldap_close($ds);

} else {
    echo "<h4>No se puede conectar al servidor LDAP</h4>";
}
?>
