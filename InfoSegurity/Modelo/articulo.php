<?php
include_once("conexion.php");

class articulo{

    public function listaArticuloCapitulo($i){
		$consulta = "SELECT * FROM articulo WHERE idcapitulo = ".$i;
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
	}

	public function listaArticuloId($i){
		$consulta = "SELECT * FROM articulo WHERE idarticulo = ".$i;
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
	}
	
	public function listaArticuloBusqueda($buscar){
		$consulta = "SELECT * FROM articulo WHERE nombre_articulo LIKE '%$buscar%'";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
	}
	
	public function listaArticuloContenido($buscar){
		$consulta = "SELECT * FROM articulo WHERE descripcion LIKE '%$buscar%'";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
    }

	public function listaArticuloContenidoCapitulo($buscar, $capitulo){
		$consulta = "SELECT * FROM articulo  WHERE descripcion LIKE '%$buscar%' AND idcapitulo = $capitulo";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
    }
}

?>