<?php
session_start();
function conectar(){
    $link = mysql_connect("localhost", "root", "") or die("Error al conectar" . mysql_error());
    mysql_select_db("cineucc") or die("No se pudo conectar a NotiUCC");
    return $link;
}

function getSalas(){
    $link = conectar();
    $sql = "Select idSala from Sala where idSala NOT IN (Select idSala from Pelicula)";
    
    $query = mysql_query($sql, $link);
        
        while ($line = mysql_fetch_array($query)) {
            $return .= "<option value='" . $line['idSala'] . "'>" . $line['idSala'] . "</option>";
        }
        mysql_close($link);
        
        return $return;
}
?>
