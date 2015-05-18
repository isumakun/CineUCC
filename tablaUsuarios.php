<?php

$link = conectar();

$sql = "SELECT * FROM usuario";

$query = mysql_query($sql, $link);

if (mysql_num_rows($query) != 0) {
    while ($line = mysql_fetch_array($query)) {
        echo '<tr>';
        echo "<td>" . $line['cedula'] . "</td>";
        echo "<td>" . $line['nombre'] . "</td>";
        echo "<td>" . $line['apellido'] . "</td>";
        echo "<td>" . $line['telefono'] . "</td>";
        echo "<td>" . $line['tipo'] . "</td>";
        echo "<td><a href='registro.php?cedula=" . $line["cedula"] . "'>
                    <button>Editar</button></a></td>";
        echo "<td ><a href='eliminarUsuario.php?cedula=" . $line["cedula"] . "'>
                   <button onclick='return confirm(\"Seguro que desea eliminar este Usuario?\")';' >
                   Eliminar</button></a></td>";
        echo "</tr>";
    }
    mysql_close($link);
} else {
    echo '<tr>';
    echo '<td colspan=5> No hay registros en la base de datos</td>';
    echo '</tr>';
}

    