<?php

require 'funciones.php';

$link = conectar();

if (isset($_POST['idSala'])) {

    if ((isset($_POST["nombre"])) && (isset($_POST["imagen"])) && (isset($_POST["idSala"]))) {

        if ($_POST['idSala'] != 0) {
            $sql = "UPDATE `pelicula`
                    SET 
                      `nombre` = '{$_POST["nombre"]}',
                      `imagen` = '{$_POST["imagen"]}',
                      `idSala` = '{$_POST["idSala"]}'
                    WHERE `idPelicula` = '{$_POST["idPelicula"]}'";

            mysql_query($sql, $link);
            $error = mysql_error($link);

            if ($error == null) {
                header("Location: peliculas.php");
            } else {
                //header("Location: registroPelicula.php?estado=errordatos");
                echo $sql;
                echo "<center>";
                echo "<h1> " . $error . "</h1>";
                echo "</center>";
            }
        } else {
            header("Location: registroPelicula.php?estado=sala");
        }
    }
    mysql_close($link);
} else {

    if ((isset($_POST["nombre"])) && (isset($_POST["imagen"])) && (isset($_POST["idSala"]))) {

        if ($_POST['idSala'] != 0) {
            $sql = "INSERT INTO `pelicula`
            (`nombre`,
            `imagen`,
             `idSala`)
                VALUES ('{$_POST["nombre"]}',
                        '{$_POST["imagen"]}',
                        '{$_POST["idSala"]}')";

            mysql_query($sql, $link);
            $error = mysql_error($link);

            if ($error == null) {
                header("Location: peliculas.php");
            } else {
                //header("Location: registroPelicula.php?estado=errordatos");
                echo $sql;
                echo "<center>";
                echo "<h1> " . $error . "</h1>";
                echo "</center>";
            }
        } else {
            header("Location: registroPelicula.php?estado=sala");
        }
    }
    mysql_close($link);
}
?>
