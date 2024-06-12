<?php
require_once "../Connection/Connection.php";

class imagen
{

    function ObtenerImagenModel()
    {
        $connection = connection();
        $sql = "SELECT * FROM imagen";
        $respuesta = $connection->query($sql);
        $imagenes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagenes;
    }
    function IngresarImagenModel($nombre, $imagen)
    {
        $connection = connection();
        $nombreImagen = $imagen['name'];
        $extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);
        $sql = "INSERT INTO imagen(nombre, extension) values('$nombre', '$extension')";  
        $respuesta = $connection->query($sql);
        $id = $connection->insert_id;
        $RutaTemp = $imagen['temp_name'];
        move_uploaded_file($RutaTemp, "../Imagenes/id.extension");
        $imagenes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagenes;
    }
}
