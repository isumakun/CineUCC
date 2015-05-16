<?php

$link = conectar();

$sql = "SELECT * FROM cliente";

$query = mysql_query($sql, $link);
        
        while ($line = mysql_fetch_array($query)) {
            echo '<tr>';
            echo "<td>" . $line['cedula_cliente'] . "</td>";
            echo "<td>" . $line['nombre'] . "</td>";
            echo "<td>" . $line['telefono'] . "</td>";
            echo "<td><a href='agregarUsuario.php?idUsuario=".$line["idUsuario"]."'>
                <button class='btn btn-primary'>Editar</button></a>";
            echo "<a href='eliminarUsuario.php?idUsuario=".$line["idUsuario"]."'>
                   <button class='btn btn-danger' onclick='return confirm(\"Seguro que desea eliminar este Usuario?\")';' >
                   Eliminar</button></a>";
            echo "</tr>";
        }
        mysql_close($link);
    
        
?>