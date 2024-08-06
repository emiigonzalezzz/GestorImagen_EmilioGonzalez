<?php
require_once "../Connection/Connection.php";

class usuario{
function registerUsuarioModel($usuario, $contraseña)
{
    $connection = connection();
    $sql = "INSERT INTO usuarios(usuario, contraseña) values ('$usuario','$contraseña')";
    $respuesta = $connection->query($sql);
    return $respuesta;

}
}
