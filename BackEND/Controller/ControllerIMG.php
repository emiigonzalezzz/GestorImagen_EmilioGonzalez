<?php
 require_once "../Model/ImagenDAO.php";

$function = $_GET['function'];

switch ($function) {
    case "ObtenerImagen":
        ObtenerImagen();
        break;
    case "IngresarImagen":
        IngresarImagen();
        break;
}

function ObtenerImagen()
{
    $resultado = (new imagen())->ObtenerImagenModel();
    echo json_encode($resultado);
}
function IngresarImagen()
{
    $nombre = $_POST['nombre'];
    $imagen = $_FILES['imagen'];
    $resultado = (new imagen())->IngresarImagenModel($nombre, $imagen);
    echo json_encode($resultado);
}
?>