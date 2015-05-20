<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/login-style.css">
    </head>
    <?php
    require './funciones.php';

    if (isset($_GET['estado'])) {
        if ($_GET['estado'] == 'logout') {
            unset($_SESSION['tipo']);
            unset($_SESSION['estado']);
            unset($_SESSION['usuario']);
            header('Location: home.php');
        } elseif ($_GET['estado'] == "nousuario") {
            echo '<script> alert("El usuario no existe") </script>';
        } elseif ($_GET['estado'] == "malclave") {
            echo '<script> alert("La clave es erronea") </script>';
        }
    }

    if (isset($_SESSION['estado'])) {
    if($_SESSION['estado']=='autenticado'){
            header('Location: home.php');
        }
    }
    ?>
    <body>
        <div class="container">
            <div id="login-form">
                <h3>Cine UCC</h3>
                <fieldset>
                    <form action="login.php" method="POST">
                        <input type="text" name="usuario" required placeholder="Usuario">
                        <input type="password" name="password" required placeholder="Password">
                        <input type="submit" value="Login">
                        <footer class="clearfix">
                            <p><strong><a href="registro.php">Registro</a></strong></p>
                        </footer>
                    </form>
                </fieldset>
            </div> <!-- end login-form -->
        </div>
    </body>
</html>
