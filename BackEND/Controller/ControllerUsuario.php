<?php

require_once '../Model/UsuarioDAO.php';

$function = $_GET['function'];

switch ($function) {
    case "obtenerUsuario":
        obtenerUsuario();
        break;
    case "registerUsuario":
        registerUsuario();
        break;
}

function obtenerUsuario()
{
    $resultado = (new usuario())->obtenerUsuarioModel();
    echo json_encode($resultado);
}

function registerUsuario()
{
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $resultado = (new usuario())->registerUsuarioModel($usuario, $contraseña);
    echo json_encode($resultado);
}
