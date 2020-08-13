<?php

include_once("../Modelo/articulos.php");
include_once("../Modelo/capitulos.php");
include_once("formCapituloBusqueda.php");
include_once("formArticuloBusqueda.php");
include_once("formIndex.php");


if (isset($_POST["txtbusqueda"])) {
    $objCapitulo = new capitulos;
    $objForm = new formCapituloBusqueda;
    $objForm -> formCapituloBusquedaShow($objCapitulo -> listaCapitulos());
}else{
    $variable = $_POST["txtbusqueda"];
    switch ($_POST['ddTipo']) {
        case 'Capitulo':
            $objCapitulo = new capitulos;
            $objForm = new formCapituloBusqueda;
            $objForm -> formCapituloBusquedaShow($objCapitulo -> listaCapitulosBusqueda($variable));
            break;
        case 'Articulo':
            $objArticulo = new articulos;
            $objForm = new formArticuloBusqueda;
            $objForm -> formArticuloBusquedaShow($objArticulo -> listaArticulosBusqueda($variable));
            break;
        
        default:
            # code...
            break;
    }
}


