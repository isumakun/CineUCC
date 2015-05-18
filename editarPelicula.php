<?php
$link = conectar();

$sql = "SELECT * FROM pelicula where idPelicula = {$_GET['idPelicula']}";

$query = mysql_query($sql, $link);

while ($line = mysql_fetch_array($query)) {
    ?>
    <form action="insertarPelicula.php" method="POST">
        <input type="text" value="<?php echo $line['idPelicula'] ?>" name="idPelicula" hidden=""/>
        <input type="text" value="<?php echo $line['nombre'] ?>" name="nombre" required placeholder="Nombre"/>
        <input type="text" value="<?php echo $line['imagen'] ?>" name="imagen" required placeholder="URL Imagen"/>
        <select name="idSala">
            <option value="<?php echo $line['idSala'] ?>" selected><?php echo $line['idSala'] ?></option>
            <?php echo getSalas() ?>
        </select>
        <input type="submit" class="login login-submit" value="Guardar"/>
    </form>
    <?php
}