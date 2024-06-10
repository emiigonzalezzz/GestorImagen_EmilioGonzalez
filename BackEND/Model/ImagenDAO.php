<?php
require_once "../Connection/Connection.php";

class imagen
{

    function ObtenerImagenModel()
    {
        $connection = connection();
        $sql = "SELECT * FROM imagen;";
        $respuesta = $connection->query($sql);
        $imagenes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagenes;
    }
    function IngresarImagenModel()
    {
        $connection = connection();
        $sql = "";  
        $respuesta = $connection->query($sql);
        $imagenes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagenes;
    }
}
