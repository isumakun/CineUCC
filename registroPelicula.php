<?php require './funciones.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <head>
        <title>Nueva Pelicula</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/table.css" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-func.js"></script>
        <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'/>
        <link rel="stylesheet" href="css/form/style.css"></link>

    </head>
    <body>
        <!-- Shell -->
        <div id="shell">
            <!-- Header -->
            <div id="header">
                <h1 id="logo"><a href="home.php">Cine UCC</a></h1>
                <div class="social">
                    <span>FOLLOW US ON:</span>
                    <ul>
                        <li><a class="twitter" href="#">twitter</a></li>
                        <li><a class="facebook" href="#">facebook</a></li>
                        <li><a class="vimeo" href="#">vimeo</a></li>
                        <li><a class="rss" href="#">rss</a></li>
                    </ul>
                </div>

                <!-- Navigation -->
                <div id="navigation">
                    <ul>
                        <li><a href="home.php">Inicio</a></li>
                        <?php
                        if (isset($_SESSION['tipo'])) {
                            if ($_SESSION['tipo'] == 'admin') {
                                echo '<li><a href="usuarios.php">Usuarios</a></li>';
                            }
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['tipo'])) {
                            if ($_SESSION['tipo'] == 'admin') {
                                echo '<li><a class="active" href="peliculas.php">Peliculas</a></li>';
                            } else {
                                echo '<li><a href="peliculas.php">Mi cuenta</a></li>';
                            }
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['tipo'])) {
                            if ($_SESSION['tipo'] == 'admin') {
                                echo '<li><a href="salas.php">Salas</a></li>';
                            }
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['tipo'])) {
                            echo '<li><a href="reservas.php">Reservas</a></li>';
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['estado'])) {
                            echo '<li><a href="pagina_login.php?estado=logout">Salir</a></li>';
                        } else {
                            echo '<li><a href="pagina_login.php">Login</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <!-- end Navigation -->

                <!-- Sub-menu -->
                <div id="sub-navigation">

                </div>
                <!-- end Sub-Menu -->

            </div>
            <!-- end Header -->

            <!-- Main -->
            <div id="main">
                <!-- Content -->
                <div id="content">
                    <div class="login-card" style="margin-top: 20px;">
                        <div class="table-title" style="">
                            <h1>Nueva Pelicula</h1><br>
                        </div>
                        <?php
                        if (isset($_GET['idPelicula'])) {
                            require './editarPelicula.php';
                        } else {
                            ?>
                        <form action="insertarPelicula.php" method="POST">
                            <input type="text" name="nombre" required placeholder="Nombre"/>
                            <input type="text" name="imagen" required placeholder="URL Imagen"/>
                            <select name="idSala">
                                <option value="0" selected>Selecciona una Sala</option>
                                <?php echo getSalas() ?>
                            </select>
                            <input type="submit" class="login login-submit" value="Guardar"/>
                        </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- end Main -->
            <?php
            if (isset($_GET['estado'])) {
                if ($_GET['estado'] == "malclave") {
                    echo '<script> alert("Revise los datos") </script>';
                }else if ($_GET['estado'] == "sala") {
                    echo '<script> alert("Selecciones una Sala") </script>';
                }
            }
            ?>
            <!-- Footer -->
            <div id="footer">
                <center>
                    <h3>Proyecto Cine UCC</h3>
                </center>
            </div>
            <!-- end Footer -->
        </div>
        <!-- end Shell -->
    </body>
</html>
