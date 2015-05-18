<?php require './funciones.php'; ?>
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

                    <!-- Box -->
                    <div class="box">
                        <div class="head">
                            <h2>ULTIMAS PELICULAS</h2>
                            <p class="text-right"><a href="#">Ver todas</a></p>
                        </div>

                        <!-- Movie -->
                        <div class="movie">

                            <div class="movie-image">

                                <a href="#"><span class="play"><span class="name">X-MEN 3</span></span><img src="css/images/movie1.jpg" alt="movie" /></a>
                            </div>

                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">SPIDER MAN 2</span></span><img src="css/images/movie2.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">SPIDER MAN 3</span></span><img src="css/images/movie3.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">VALKYRIE</span></span><img src="css/images/movie4.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">GLADIATOR</span></span><img src="css/images/movie5.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie last">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">ICE AGE</span></span><img src="css/images/movie6.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->
                        <div class="cl">&nbsp;</div>
                    </div>
                    <!-- end Box -->

                    <!-- Box -->
                    <div class="box">
                        <div class="head">
                            <h2>TOP RATED</h2>
                            <p class="text-right"><a href="#">See all</a></p>
                        </div>

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">TRANSFORMERS</span></span><img src="css/images/movie7.jpg" alt="movie" /></a>
                            </div>	
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">MAGNETO</span></span><img src="css/images/movie8.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">KUNG FU PANDA</span></span><img src="css/images/movie9.jpg" alt="movie" /></a>
                            </div>	
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">EAGLE EYE</span></span><img src="css/images/movie10.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">NARNIA</span></span><img src="css/images/movie11.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie last">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">ANGELS &amp; DEMONS</span></span><img src="css/images/movie12.jpg" alt="movie" /></a>
                            </div>	
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->
                        <div class="cl">&nbsp;</div>
                    </div>
                    <!-- end Box -->

                    <!-- Box -->
                    <div class="box">
                        <div class="head">
                            <h2>MOST COMMENTED</h2>
                            <p class="text-right"><a href="#">See all</a></p>
                        </div>

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">HOUSE</span></span><img src="css/images/movie13.jpg" alt="movie" /></a>
                            </div>
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">VACANCY</span></span><img src="css/images/movie14.jpg" alt="movie" /></a>
                            </div>	
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">MIRRORS</span></span><img src="css/images/movie15.jpg" alt="movie" /></a>
                            </div>	
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">THE KINGDOM</span></span><img src="css/images/movie16.jpg" alt="movie" /></a>
                            </div>	
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">MOTIVES</span></span><img src="css/images/movie17.jpg" alt="movie" /></a>
                            </div>	
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->

                        <!-- Movie -->
                        <div class="movie last">
                            <div class="movie-image">
                                <a href="#"><span class="play"><span class="name">THE PRESTIGE</span></span><img src="css/images/movie18.jpg" alt="movie" /></a>
                            </div>	
                            <div class="rating">
                                <p>RATING</p>
                                <div class="stars">
                                    <div class="stars-in">

                                    </div>
                                </div>
                                <span class="comments">12</span>
                            </div>
                        </div>
                        <!-- end Movie -->
                        <div class="cl">&nbsp;</div>
                    </div>
                    <!-- end Box -->

                </div>
                <!-- end Content -->

                <!-- NEWS -->
                <div id="news">
                    <div class="head">
                        <h3>NEWS</h3>
                        <p class="text-right"><a href="#">See all</a></p>
                    </div>

                    <div class="content">
                        <p class="date">12.04.09</p>
                        <h4>Disney's A Christmas Carol</h4>
                        <p>&quot;Disney's A Christmas Carol,&quot; a multi-sensory thrill ride re-envisioned by Academy Award&reg;-winning filmmaker Robert Zemeckis, captures... </p>
                        <a href="#">Read more</a>
                    </div>
                    <div class="content">
                        <p class="date">11.04.09</p>
                        <h4>Where the Wild Things Are</h4>
                        <p>Innovative director Spike Jonze collaborates with celebrated author Maurice Sendak to bring one of the most beloved books of all time to the big screen in &quot;Where the Wild Things Are,&quot;...</p>
                        <a href="#">Read more</a>
                    </div>
                    <div class="content">
                        <p class="date">10.04.09</p>
                        <h4>The Box</h4>
                        <p>Norma and Arthur Lewis are a suburban couple with a young child who receive an anonymous gift bearing fatal and irrevocable consequences.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
                <!-- end NEWS -->

                <!-- Coming -->
                <div id="coming">
                    <div class="head">
                        <h3>COMING SOON<strong>!</strong></h3>
                        <p class="text-right"><a href="#">See all</a></p>
                    </div>
                    <div class="content">
                        <h4>The Princess and the Frog </h4>
                        <a href="#"><img src="css/images/coming-soon1.jpg" alt="coming soon" /></a>
                        <p>Walt Disney Animation Studios presents the musical "The Princess and the Frog," an animated comedy set in the great city of New Orleans...</p>
                        <a href="#">Read more</a>
                    </div>
                    <div class="cl">&nbsp;</div>
                    <div class="content">
                        <h4>The Princess and the Frog </h4>
                        <a href="#"><img src="css/images/coming-soon2.jpg" alt="coming soon" /></a>
                        <p>Walt Disney Animation Studios presents the musical "The Princess and the Frog," an animated comedy set in the great city of New Orleans...</p>
                        <a href="#">Read more</a>
                    </div>

                </div>
                <!-- end Coming -->
                <div class="cl">&nbsp;</div>
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