<?php

include_once("formArticulo.php");
include_once("../Modelo/articulo.php");

$objArticulo = new articulo;
$objForm = new formArticulo;
$objForm -> formArticuloShow($objArticulo -> listaArticuloId($_GET['articulo']));

?>