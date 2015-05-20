<?php
$link = conectar();

if (isset($_GET['idPelicula'])) {

    $sql = "SELECT * FROM pelicula where idPelicula=" . $_GET['idPelicula'];
    $query = mysql_query($sql, $link);

    if (mysql_num_rows($query) != 0) {
        while ($line = mysql_fetch_array($query)) {
            ?>
            <!-- Movie -->
            <center>
                <div>

                    <div >
                        <h1><?php echo $line['nombre'] ?></h1>
                        <img style="width:152px; height:214px;" src="<?php echo $line['imagen'] ?>" alt="movie" />
                        <h1>$10.000</h1>
                    </div>
                    <?php
                    if (isset($_SESSION['tipo'])) {
                        ?>
                        <form action="insertarReserva.php" method="POST">
                            <br>
                            <label>Tickets: </label>
                            <input hidden="" name="cedula_usuario" value="<?php echo $_SESSION['usuario'] ?>"/>
                            <input hidden="" name="idPelicula" value="<?php echo $_GET['idPelicula'] ?>"/>
                            <input type="text" name="numero_ticketes" maxlength="1" required placeholder="Numero de Tickets a Reservar"/>
                            <br> <br>
                            <input type="submit" class="login login-submit" value="Reservar"/>
                        </form>
                        <?php
                    } else {
                        ?>
                        <h4>Inicia Sesión para reservar esta pelicula</h4>
                        <?php
                    }
                    ?>
                </div>
            </center>

            <!-- end Movie -->
            <?php
        }
        mysql_close($link);
    } else {

        echo 'No hay registros en la base de datos';
    }
} else {
    header("Location: home.php");
}
