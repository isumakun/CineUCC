<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/login-style.css">
    </head>
    <body>
        <?php if (isset($_GET['estado'])) {
            ?>
            <div class="container">
                <div id="login-form">
                    <h3>Registro</h3>

                    <fieldset>
                        <center>
                            <?php
                            if ($_GET['estado'] == 'guardado') {
                                echo '<p><strong> Se ha registrado satisfactoriamente </strong></p>';
                                echo '<a href="home.php">Continuar</a>';
                            } else if ($_GET['estado'] == 'errordatos') {
                                echo '<p><strong> Error en los datos vuelva a intentarlo </strong></p>';
                                echo '<a href="registro.php">Volver</a>';
                            }
                            ?>
                        </center>
                    </fieldset>
                </div> <!-- end login-form -->
            </div>
            <?php
        } else {
            ?>
            <div class="container">
                <div id="login-form">
                    <h3>Registro</h3>
                    <fieldset>
                        <form action="insertarUsuario.php" method="POST">
                            <input type="text" name="cedula" required placeholder="Cedula">
                            <input type="text" name="nombre" required placeholder="Nombre">
                            <input type="text" name="apellido" required placeholder="Apellido">
                            <input type="password" name="password" required placeholder="Password">
                            <input type="text" name="telefono" required placeholder="Telefono">
                            <input type="submit" value="Registrar">
                            <footer class="clearfix">
                                <p><strong><a href="pagina_login.php">Login</a></strong></p>
                            </footer>
                        </form>
                    </fieldset>
                </div> <!-- end login-form -->
            </div>
            <?php
        }
        ?>
    </body>
</html>
