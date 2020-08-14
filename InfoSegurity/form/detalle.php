<?php

include_once("formDetalle.php");
include_once("../Modelo/disposicion.php");

$objForm = new formDetalle;
$objDisposicion = new disposicion;
$objForm -> formDetalleShow($objDisposicion->listaDispocicionId($_GET['disposicion']));

?>