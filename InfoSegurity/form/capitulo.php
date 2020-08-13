<?php

include_once("../Modelo/articulo.php");
include_once("formCapitulo.php");

$objForm = new formCapitulo;
$objArticulo = new articulo;
$objForm -> formCapituloShow($objArticulo-> listaArticuloCapitulo($_GET["id"])); 

?>