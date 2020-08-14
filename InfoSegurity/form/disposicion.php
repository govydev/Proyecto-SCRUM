<?php

include_once("formDisposicion.php");
include_once("../Modelo/disposicion.php");

$objForm = new formDisposicion;
$objDisposicion = new disposicion;
if(!isset($_POST['txtBusqueda'])){
    $objForm -> formDisposicionShow($objDisposicion->listaDispocicion());
}else{
    $objForm -> formDisposicionShow($objDisposicion->listaDispocicionBusqueda($_POST['txtBusqueda']));
}


?>