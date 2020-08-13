<?php

include_once("../Modelo/articulos.php");
include_once("formArticulo.php");

$objForm = new formArticulo;
$objArticulo = new articulos;
$objForm -> formArticuloShow($objArticulo-> listaArticulobyTitulo($_GET["id"])); 

?>