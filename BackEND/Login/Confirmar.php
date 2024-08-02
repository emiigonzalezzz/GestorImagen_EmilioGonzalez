<?php
session_start();
if(isset($_SESSION['usuario'])){
    echo "bienvenido";
} else {
    echo "denegado";
}
