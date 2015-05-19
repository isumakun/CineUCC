<?php

$link = conectar();

$sql = "SELECT * FROM reserva";
$query = mysql_query($sql, $link);

if (mysql_num_rows($query) != 0) {
    while ($line = mysql_fetch_array($query)) {
        echo '<tr>';
        echo "<td>" . $line['idReserva'] . "</td>";
        echo "<td>" . $line['fecha'] . "</td>";
        $sql2 = "SELECT nombre FROM `pelicula` WHERE idPelicula=" . $line["idPelicula"];
        $query2 = mysql_query($sql2, $link);
        $nombre = mysql_result($query2, 0);
        echo "<td>" . $nombre . "</td>";
        echo "<td>" . $line['cedula_usuario'] . "</td>";
        echo "<td>" . $line['cedula_operario'] . "</td>";
        $sql3 = "SELECT * FROM `ticket` WHERE idReserva=" . $line["idReserva"];
        $query3 = mysql_query($sql3, $link);
        $ticketes = mysql_num_rows($query3);
        echo "<td>" . $ticketes . "</td>";
        $sql4 = "SSELECT SUM(precio) FROM ticket; WHERE idReserva=" . $line["idReserva"];
        $query4 = mysql_query($sql4, $link);
        $totalReserva = mysql_num_rows($query4);
        echo "<td>" . $totalReserva . "</td>";
        echo "</tr>";
    }
    mysql_close($link);
} else {
    echo '<tr>';
    echo '<td colspan=7> No hay registros en la base de datos</td>';
    echo '</tr>';
}

    