<?php

header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');
require_once '../funciones.php';
require_once 'entidades.php';
    $link = conectar();
    $lista = array();
    $fila = 0;
    $sql = mysql_query("Select * from usuario", $link) or die("Error en:" . mysql_error());

    while ($line = mysql_fetch_array($sql, MYSQL_ASSOC)) {
        
        $n = new usuario();
        $n->cedula = $line['cedula'];
        $n->nombre = $line['nombre'];
        $n->password = $line['password'];
        $lista[$fila] = $n;
        $fila++;
    }
    
mysql_close($link);
    $json = json_encode($lista, JSON_UNESCAPED_UNICODE);
    echo $json;

