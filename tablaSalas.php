<?php

$link = conectar();

$sql = "SELECT * FROM sala";
$query = mysql_query($sql, $link);

if (mysql_num_rows($query) != 0) {
    while ($line = mysql_fetch_array($query)) {
        echo '<tr>';
        echo "<td>" . $line['idSala'] . "</td>";
        echo "<td>" . $line['numero_filas'] . "</td>";
        echo "<td>" . $line['numero_sillas'] . "</td>";
        echo "<td><a href='registroSala.php?idSala=" . $line["idSala"] . "'>
                    <button>Editar</button></a>";
        echo "<td><a href='eliminarSala.php?idSala=" . $line["idSala"] . "'>
                   <button onclick='return confirm(\"Seguro que desea eliminar esta Sala?\")';' >
                   Eliminar</button></a></td>";
        echo "</tr>";
    }
    mysql_close($link);
} else {
    echo '<tr>';
    echo '<td colspan=5> No hay registros en la base de datos</td>';
    echo '</tr>';
}

    