<?php
include_once("conexion.php");

class capitulos{

    public function listaCapitulos(){
        conexion::getConexion();
		$consulta = "SELECT * FROM capitulo";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return $fila;
    }

    public function listaCapitulosBusqueda($buscar){
        conexion::getConexion();
		$consulta = "SELECT * FROM capitulo WHERE nombre_capitulo like '%$buscar%'";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return $fila;
	}
	
	public function listaCapitulosId($numCapitulo){
        conexion::getConexion();
		$consulta = "SELECT * FROM capitulo WHERE numero_capitulo = $numCapitulo";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return $fila;
    }


}

?>