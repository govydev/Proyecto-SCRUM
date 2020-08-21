<?php
include_once("conexion.php");

class disposicion{

    public function listaDispocicion(){
		$consulta = "SELECT * FROM disposicion";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
	}
	
	public function listaDispocicionId($id){
		$consulta = "SELECT * FROM disposicion WHERE iddisposicion = $id";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
	}
	
	public function listaDispocicionBusqueda($busqueda){
		$consulta = "SELECT * FROM disposicion WHERE descripcion like '%$busqueda%'";
		$resultado = conexion::getConexion() -> query($consulta);
		return $resultado->fetch_all();
    }

}

?>