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

function loginUsuarioModel($usuario, $contraseña){
    $connection = connection();
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña= '$contraseña'";
    $respuesta = $connection->query($sql);
    $resultado = $respuesta ->fetch_assoc();
    if($resultado == null ){
        return $resultado;
    }else{
         $_SESSION["usuario"] = $usuario; 
         return "resultado correcto";
        }

    }

}


