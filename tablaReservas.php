<?php

$link = conectar();
if (isset($_SESSION['tipo'])) {
    if ($_SESSION['tipo'] == 'admin') {
        $sql = "SELECT * FROM reserva";
    }else{
        $sql = "SELECT * FROM reserva Where cedula_usuario=".$_SESSION['usuario'];
    }
}

$query = mysql_query($sql, $link);

if (mysql_num_rows($query) != 0) {
    while ($line = mysql_fetch_array($query)) {
        echo '<tr>';
        echo "<td>" . $line['idReserva'] . "</td>";
        $sql2 = "SELECT nombre FROM `pelicula` WHERE idPelicula=" . $line["idPelicula"];
        $query2 = mysql_query($sql2, $link);
        $nombre = mysql_result($query2, 0);
        echo "<td>" . $nombre . "</td>";
        echo "<td>" . $line['cedula_usuario'] . "</td>";
        $sql3 = "SELECT * FROM `ticket` WHERE idReserva=" . $line["idReserva"];
        $query3 = mysql_query($sql3, $link);
        $ticketes = mysql_num_rows($query3);
        echo "<td>" . $ticketes . "</td>";
        $sql4 = "SELECT SUM(precio) FROM ticket WHERE idReserva=" . $line["idReserva"];
        $query4 = mysql_query($sql4, $link);
        $totalReserva = mysql_result($query4, 0);
        echo "<td>" . $totalReserva . "</td>";
        echo "</tr>";
    }
    mysql_close($link);
} else {
    echo '<tr>';
    echo '<td colspan=7> No hay registros en la base de datos</td>';
    echo '</tr>';
}

    