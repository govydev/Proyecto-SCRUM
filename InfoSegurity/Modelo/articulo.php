<?php
include_once("conexion.php");

class articulo{

    public function listaArticuloCapitulo($i){
		$consulta = "SELECT * FROM articulo WHERE idcapitulo = $i";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
    }

}

?>