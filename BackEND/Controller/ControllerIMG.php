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
    $Nombre = $_POST['Nombre'];
    $Imagen = $_FILES ['Imagen']
    $resultado = (new imagen())->IngresarImagenModel($Nombre, $Imagen);
    echo json_encode($resultado);
}
?>