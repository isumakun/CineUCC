<?php

require 'funciones.php';

$link = conectar();

if ((isset($_POST["nombre"]))
        && (isset($_POST["idSala"]))) {

    $sql = "INSERT INTO `pelicula`
            (`nombre`,
             `idSala`)
                VALUES ('{$_POST["nombre"]}',
                        '{$_POST["idSala"]}'}'";

    mysql_query($sql, $link);
    $error = mysql_error($link);

    if ($error == null) {
        header("Location: registro.php?estado=guardado");
    } else {
        header("Location: registro.php?estado=errordatos");
        echo "<center>";
        echo "<h1> " . $error . "</h1>";
        echo "</center>";
    }
}
mysql_close($link);
?>
