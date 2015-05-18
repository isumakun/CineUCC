<?php require './funciones.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <head>
        <title>Peliculas</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/table.css" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-func.js"></script>

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
                    <center>
                        <div class="table-title" style="margin-top: 20px">
                            <h3>Peliculas</h3>
                        </div>

                        <div style="margin-bottom: 10px">
                            <a href='registroPelicula.php'>
                                <button class="botoncool">
                                    Nueva Pelicula</button></a>
                        </div>
                    </center>
                    <center>
                        <table class="table-fill" style="margin-bottom: 20px">
                            <thead>
                                <tr>
                                    <th class="text-left">idPelicula</th>
                                    <th class="text-left">Nombre</th>
                                    <th class="text-left">Sala</th>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                <?php require './tablaPeliculas.php'; ?>
                            </tbody>
                        </table>
                    </center>
                </div>
            </div>
            <!-- end Main -->

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
