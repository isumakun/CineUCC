<?php
$link = conectar();

$sql = "SELECT * FROM sala where idSala = {$_GET['idSala']}";

$query = mysql_query($sql, $link);

while ($line = mysql_fetch_array($query)) {
    ?>
    <form action="insertarSala.php" method="POST">
        <input type="text" hidden="" value="<?php echo $line['idSala'] ?>" name="idSala"/>
        <input type="text" maxlength="2" value="<?php echo $line['numero_filas'] ?>" name="numero_filas" required placeholder="Numero Filas"/>
        <input type="text" maxlength="3" value="<?php echo $line['numero_sillas'] ?>" name="numero_sillas" required placeholder="Numero Sillas"/>
        <input type="submit" class="login login-submit" value="Guardar"/>
    </form>
    <?php
}