<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <head>
        <title>Inicio</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!--[if IE 6]>
                <link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
        <![endif]-->
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-func.js"></script>
    </head>
    <body>
        <!-- Shell -->
        <div id="shell">
            <!-- Header -->
            <div id="header">
                <h1 id="logo"><a href="#">Cine UCC</a></h1>
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
                        <li><a class="active" href="#">Inicio</a></li>
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
                                echo '<li><a href="peliculas.php">Peliculas</a></li>';
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
                    <table>
                        <thead>
                            <tr>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                            </tr>
                        </thead>
                    </table>
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
