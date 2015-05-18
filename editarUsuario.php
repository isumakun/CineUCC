<?php
$link = conectar();

$sql = "SELECT * FROM usuario where cedula = {$_GET['cedula']}";

$query = mysql_query($sql, $link);

while ($line = mysql_fetch_array($query)) {
    ?>
    <form action="insertarUsuario.php" method="POST">
        <input type="text" hidden="" name="cedula" value="<?php echo $line['cedula'] ?>" required placeholder="Cedula">
        <input type="text" name="nombre" value="<?php echo $line['nombre'] ?>" required placeholder="Nombre">
        <input type="text" name="apellido" value="<?php echo $line['apellido'] ?>" required placeholder="Apellido">
        <input type="password" name="password" value="<?php echo $line['password'] ?>" required placeholder="Password">
        <input type="text" name="telefono" value="<?php echo $line['telefono'] ?>" required placeholder="Telefono">
        <input type="submit" value="Guardar">
    </form>
    <?php
}