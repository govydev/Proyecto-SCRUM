<?php
include_once("conexion.php");

class articulo{

    public function listaArticulo(){
        conexion::getConexion();
		$consulta = "SELECT * FROM articulo";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return $fila;
    }

}

?>