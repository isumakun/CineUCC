<?php
require_once '../funciones.php';
$link = conectar();
        
        if (isset($_POST['Cedula'])
                && isset($_POST['Password'])
                && isset($_POST['Nombre'])
                && isset($_POST['Apellido'])
                && isset($_POST['Telefono'])){
            
            if(hayUsuario($_POST['Cedula'])){
                echo 'hayUsuario';
            }else{
                $sql = "INSERT INTO `usuario`
                        (cedula,
                         nombre,
                         apellido,
                         telefono,
                         password
                         )
                        VALUES ('{$_POST["Cedula"]}',
                                '{$_POST["Nombre"]}',
                                '{$_POST["Apellido"]}',
                                '{$_POST["Telefono"]}',
                                '{$_POST["Password"]}')";

                        mysql_query($sql, $link);
                        $id = mysql_insert_id($link);
                        $error = mysql_error($link);

                        if ($error == null) {
                            echo $id;
                        } else {
                            echo 'errorMysql';
                        }
                        mysql_close($link);   
            }
             
        } else {
            echo 'datos';
        }

function hayUsuario($cedula){
    $usuarioRepetido = mysql_query("Select usuario.cedula from usuario where cedula='$cedula'");
    $repetido = mysql_num_rows($usuarioRepetido);
    if($repetido != 0){
        $repetido = true;
    }else{
        $repetido = false;
    }
    return $repetido;
}
?>
