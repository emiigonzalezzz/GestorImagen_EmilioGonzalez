<?php
require_once "../Connection/Connection.php";

class usuario{

    public function obtenerUsuarioModel()
    {
        $connection = connection();
        $sql = "SELECT * FROM usuarios;";
        $respuesta = $connection->query($sql);
        $usuarios = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $usuarios;
    }

function registerUsuarioModel($usuario, $contraseña)
{
    $connection = connection();
    $sql = "INSERT INTO usuarios(usuario, contraseña) values ('$usuario','$contraseña')";
    $respuesta = $connection->query($sql);
    return $respuesta;

}
}
