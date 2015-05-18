<?php

require 'funciones.php';

$link = conectar();

if (isset($_POST['cedulaid'])) {

    if ((isset($_POST["nombre"])) && (isset($_POST["apellido"])) && (isset($_POST["telefono"])) && (isset($_POST["password"]))) {

        $sql = "UPDATE `usuario`
                SET 
                  `nombre` = '{$_POST["nombre"]}',
                  `apellido` = '{$_POST["apellido"]}',
                  `telefono` = '{$_POST["telefono"]}',
                  `password` = '{$_POST["password"]}'
                WHERE `cedula` = '{$_POST['cedula']}'";

        mysql_query($sql, $link);
        $error = mysql_error($link);

        if ($error == null) {
            echo $sql;
            header("Location: registro.php?estado=guardado");
        } else {
            //header("Location: registro.php?estado=errordatos");
            echo "<center>";
            echo $sql;
            echo "<h1> " . $error . "</h1>";
            echo "</center>";
        }
    }
    mysql_close($link);
} else {

    if ((isset($_POST["cedula"])) && (isset($_POST["nombre"])) && (isset($_POST["apellido"])) && (isset($_POST["telefono"])) && (isset($_POST["password"]))) {

        $sql = "INSERT INTO `usuario`
            (cedula,
             nombre,
             apellido,
             telefono,
             password
             )
                VALUES ('{$_POST["cedula"]}',
                        '{$_POST["nombre"]}',
                        '{$_POST["apellido"]}',
                        '{$_POST["telefono"]}',
                        '{$_POST["password"]}')
                        ";

        mysql_query($sql, $link);
        $error = mysql_error($link);

        if ($error == null) {
            echo $sql;
            header("Location: registro.php?estado=guardado");
        } else {
            //header("Location: registro.php?estado=errordatos");
            echo "<center>";
            echo $sql;
            echo "<h1> " . $error . "</h1>";
            echo "</center>";
        }
    }
    mysql_close($link);
}

