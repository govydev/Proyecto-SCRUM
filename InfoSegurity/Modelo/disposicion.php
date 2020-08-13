<?php
include_once("conexion.php");

class disposiciom{

    public function listaDispocicion(){
        conexion::getConexion();
		$consulta = "SELECT * FROM disposicion";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return $fila;
    }

}

?>