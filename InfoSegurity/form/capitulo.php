<?php

include_once("../Modelo/articulos.php");
include_once("formCapitulo.php");

$objForm = new formCapitulo;
$objArticulo = new articulos;
$objForm -> formCapituloShow($objArticulo-> listaArticuloCapitulo($_GET["id"])); 

?>