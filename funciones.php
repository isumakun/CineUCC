<?php
session_start();
function conectar(){
    $link = mysql_connect("localhost", "root", "") or die("Error al conectar" . mysql_error());
    mysql_select_db("cineucc") or die("No se pudo conectar a NotiUCC");
    return $link;
}
?>
