<?php
require_once '../funciones.php';
$link = conectar();

if (
isset($_POST['idPelicula'])
&& isset($_POST['cedula_usuario'])
&& isset($_POST['numero_ticketes'])) {

$sql = "INSERT INTO `reserva`
            (
             `idPelicula`,
             `cedula_usuario`)
                VALUES (
                '{$_POST['idPelicula']}',
                '{$_POST['cedula_usuario']}')";

                mysql_query($sql, $link);
                $id = mysql_insert_id($link);
                
                for ($i=0; $i < $_POST['numero_ticketes']; $i++) { 
                    $sql2 = "INSERT INTO `ticket`
                                    (
                                     `idReserva`)
                        VALUES (
                                '$id')";
                    
                    mysql_query($sql2, $link);
                }
                
                $error = mysql_error($link);

                if ($error == null) {
                     echo 'ok';
                } else {
                     echo 'errorMysql ';
                     echo $error;
                }
                     mysql_close($link);
                } else {
                     echo 'datos';
}
?>
