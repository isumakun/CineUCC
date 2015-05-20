<?php
require_once '../funciones.php';
$link = conectar();

if (isset($_POST['idReserva'])
&& isset($_POST['idPelicula'])
&& isset($_POST['cedula_usuario'])
&& isset($_POST['num_tickets'])) {

$sql = "INSERT INTO `reserva`
            (
             `idReserva`,
             `idPelicula`,
             `cedula_usuario`)
                VALUES (
                '{$_POST['idReserva']}',
                '{$_POST['idPelicula']}',
                '{$_POST['cedula_usuario']}'";

                mysql_query($sql, $link);
                $id = mysql_insert_id($link);

                for ($i=0; $i < $_POST['num_tickets']; $i++) { 
                    $sql2 = "INSERT INTO `ticket`
                                    (
                                     `idReserva`)
                        VALUES (
                                '{$_POST['idReserva']}')";
                }
                
                $error = mysql_error($link);

                if ($error == null) {
                     echo $id;
                } else {
                     echo 'errorMysql ';
                     echo $error;
                }
                     mysql_close($link);
                } else {
                     echo 'datos';
}
?>
