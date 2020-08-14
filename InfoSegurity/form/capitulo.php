<?php

include_once("../Modelo/articulo.php");
include_once("formCapitulo.php");

$objForm = new formCapitulo;
$objArticulo = new articulo;

if (!isset($_POST['txtBusqueda'])) {
    $objForm -> formCapituloShow($objArticulo-> listaArticuloCapitulo($_GET["capitulo"]), $_GET["capitulo"]); 
}else{
    $objForm -> formCapituloShow($objArticulo-> listaArticuloContenidoCapitulo($_POST["txtBusqueda"], $_GET["capitulo"]), $_GET["capitulo"]);
}

?>