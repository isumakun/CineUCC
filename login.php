<?php

require 'funciones.php';
$link = conectar();
if ((isset($_POST["usuario"]))
        && (isset($_POST["password"]))) {

    $usuarios = mysql_query("Select * from usuario where cedula='{$_POST['usuario']}'", $link);
    $nusuarios = mysql_num_rows($usuarios);
    
        
    if ($nusuarios != 0) {
        
        $sql = "select password from usuario where cedula='{$_POST["usuario"]}'";

        $result = mysql_query($sql, $link);
        $pass = mysql_result($result, 0);
        
        $sql2 = "select tipo from usuario where cedula='{$_POST["usuario"]}'";
        
        $result2 = mysql_query($sql2, $link);
        $tipouser = mysql_result($result2, 0);

        if ($pass == $_POST['password']) {

            $_SESSION['tipo'] = $tipouser;
            $_SESSION['estado'] = "autenticado";
            $_SESSION['usuario'] = $_POST['usuario'];

            header("Location: home.php");
        } else {
            echo $pass;
            header("Location: pagina_login.php?estado=malaclave");
        }
    }else {
        echo $sql;
        //header("Location: pagina_login.php?estado=nousuario");
    }
}
mysql_close($link);
?>

