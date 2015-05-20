<?php
$link = conectar();

$sql = "SELECT * FROM pelicula";
$query = mysql_query($sql, $link);

if (mysql_num_rows($query) != 0) {
    while ($line = mysql_fetch_array($query)) {
        ?>
        <!-- Movie -->
        <div class="movie">

            <div class="movie-image">

                <a href="vistaPelicula.php?idPelicula=<?php echo $line['idPelicula'] ?>">
                    <span class="play">
                        <span class="name"><?php echo $line['nombre'] ?></span>
                    </span><img src="<?php echo $line['imagen'] ?>" alt="movie" /></a>
            </div>
        </div>
        <!-- end Movie -->
        <?php
    }
    mysql_close($link);
} else {
    
    echo 'No hay registros en la base de datos';
    
}

    