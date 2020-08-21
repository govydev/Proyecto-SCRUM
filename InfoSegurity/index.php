<?php
include_once("Modelo/capitulos.php");
include_once("Modelo/articulo.php");
include_once("form/formIndex.php");
include_once("form/formCapitulo.php");

$objCapitulo = new capitulos;
$objArticulo = new articulo;

if(!isset($_POST["txtBusqueda"])){
    $objForm = new formIndex;   
    $objForm -> formIndexShow($objCapitulo -> listaCapitulos(),"capitulo");
}else{
    switch ($_POST['txtOpcion']) {
        case 'contenido':
            $objForm = new formIndex;
            $objForm -> formIndexShow($objArticulo -> listaArticuloContenido($_POST["txtBusqueda"]),"articulo");
            break;

        case 'articulo':
            $objForm = new formIndex;
            $objForm -> formIndexShow($objArticulo -> listaArticuloBusqueda($_POST["txtBusqueda"]),"articulo");
            break;
        
        case 'capitulo':
            $objForm = new formIndex;
            $objForm -> formIndexShow($objCapitulo -> listaCapitulosBusqueda($_POST["txtBusqueda"]),"capitulo");
            break;
    }
}

?>