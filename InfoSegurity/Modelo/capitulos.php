<?php
include_once("conexion.php");

class capitulos{

    public function listaCapitulos(){
		$consulta = "SELECT * FROM capitulo";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
    }

    public function listaCapitulosBusqueda($buscar){
		$consulta = "SELECT * FROM capitulo WHERE nombre_capitulo like '%$buscar%'";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
	}
	
	public function listaCapitulosId($numCapitulo){
		$consulta = "SELECT * FROM capitulo WHERE numero_capitulo = $numCapitulo";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
    }


}

?>