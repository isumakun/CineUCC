<?php

require './funciones.php';

if (isset($_GET['cedula'])) {
    $link = conectar();
    $sql = "DELETE
            FROM usuario
            WHERE cedula = {$_GET['cedula']}";

    mysql_query($sql, $link);
    $error = mysql_error($link);

    if ($error == null) {
        header("Location: usuarios.php");
    } else {
        header("Location: usuarios.php?estado=errordatos");
        echo "<center>";
        echo "<h1> " . $error . "</h1>";
        echo "</center>";
    }
    mysql_close($link);
} else {
    header("Location: home.php");
}

