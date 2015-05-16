<?php

require 'funciones.php';

$link = conectar();

if ((isset($_POST["numero_filas"]))
        && (isset($_POST["numero_sillas"]))) {

    $sql = "INSERT INTO `sala`
            (`numero_filas`,
             `numero_sillas`)
                VALUES ('{$_POST["numero_filas"]}',
                        '{$_POST["numero_sillas"]}'}'";

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
