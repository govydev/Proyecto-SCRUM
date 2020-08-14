<?php
include_once("Modelo/capitulos.php");
include_once("Modelo/articulo.php");
include_once("form/formIndex.php");

$objCapitulo = new capitulos;
$objArticulo = new articulo;
$objForm = new formIndex;

if(!isset($_POST["txtBusqueda"])){
    $objForm -> formIndexShow($objCapitulo -> listaCapitulos());
}else{
    switch ($_POST['txtOpcion']) {
        case 'contenido':
            $objForm -> formIndexShow($objArticulo -> listaArticuloContenido($_POST["txtBusqueda"]));
            break;

        case 'articulo':
            $objForm -> formIndexShow($objArticulo -> listaArticuloBusqueda($_POST["txtBusqueda"]));
            break;
        
        case 'capitulo':
            $objForm -> formIndexShow($objCapitulo -> listaCapitulosBusqueda($_POST["txtBusqueda"]));
            break;
    }
}

?>