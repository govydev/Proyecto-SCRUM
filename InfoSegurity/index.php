<?php
include_once("Modelo/capitulos.php");
include_once("form/formIndex.php");

$objCapitulo = new capitulos;
$objForm = new formIndex;
$objForm -> formIndexShow($objCapitulo -> listaCapitulos());


?>