<?php

require 'funciones.php';

$link = conectar();

if (isset($_POST['idSala'])) {

    if ((isset($_POST["numero_filas"])) && (isset($_POST["numero_sillas"]))) {

        $sql = "UPDATE `sala`
                        SET `
                          `numero_filas` = '{$_POST["numero_filas"]}',
                          `numero_sillas` = '{$_POST["numero_sillas"]}'
                        WHERE `idSala` = '{$_POST['idSala']}'";

        mysql_query($sql, $link);
        $error = mysql_error($link);

        if ($error == null) {
            header("Location: salas.php");
        } else {
            //header("Location: registroSala.php?estado=errordatos");
            echo $sql;
            echo "<center>";
            echo "<h1> " . $error . "</h1>";
            echo "</center>";
        }
    }
    mysql_close($link);
} else {

    if ((isset($_POST["numero_filas"])) && (isset($_POST["numero_sillas"]))) {

        $sql = "INSERT INTO `sala`
            (`numero_filas`,
             `numero_sillas`)
                VALUES ('{$_POST["numero_filas"]}',
                        '{$_POST["numero_sillas"]}')";

        mysql_query($sql, $link);
        $id = mysql_insert_id($link);
        
        $error = mysql_error($link);

        if ($error == null) {
            echo $id;
            header("Location: salas.php");
        } else {
            //header("Location: registroSala.php?estado=errordatos");
            echo $sql;
            echo "<center>";
            echo "<h1> " . $error . "</h1>";
            echo "</center>";
        }
    }
    mysql_close($link);
}
?>
