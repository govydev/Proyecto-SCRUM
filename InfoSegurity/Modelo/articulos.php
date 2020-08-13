<?php
include_once("conexion.php");

class articulos{

    public function listaArticuloCapitulo($i){
		$consulta = "SELECT * FROM articulo WHERE idcapitulo = $i";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
	}
	
	public function listaArticulobyTitulo($i){
		$consulta = "SELECT * FROM articulo WHERE idarticulo = $i";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
    }

}

?>