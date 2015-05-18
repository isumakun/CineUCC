<?php

$link = conectar();

$sql = "SELECT * FROM pelicula";
$query = mysql_query($sql, $link);

if (mysql_num_rows($query) != 0) {
    while ($line = mysql_fetch_array($query)) {
        echo '<tr>';
        echo "<td>" . $line['idPelicula'] . "</td>";
        echo "<td>" . $line['nombre'] . "</td>";
        echo "<td>" . $line['idSala'] . "</td>";
        echo "<td><a href='registroPelicula.php?idPelicula=" . $line["idPelicula"] . "'>
                    <button>Editar</button></a>";
        echo "<td><a href='eliminarPelicula.php?idPelicula=" . $line["idPelicula"] . "'>
                   <button onclick='return confirm(\"Seguro que desea eliminar esta Pelicula?\")';' >
                   Eliminar</button></a></td>";
        echo "</tr>";
    }
    mysql_close($link);
} else {
    echo '<tr>';
    echo '<td colspan=7> No hay registros en la base de datos</td>';
    echo '</tr>';
}

    