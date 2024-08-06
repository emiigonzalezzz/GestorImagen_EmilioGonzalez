<?php

require_once '../Model/UsuarioDAO.php';

$function = $_GET['function'];

switch ($function) {
    case "registerUsuario":
        registerUsuario();
        break;
}

function registerUsuario()
{
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $resultado = (new usuario())->registerUsuarioModel($usuario, $contraseña);
    echo json_encode($resultado);
}
