<?php
class conexion{
	public static $conexion = null;

	private function conexion()
	{
		mysql_connect("localhost","root","12345678");
		mysql_select_db("scrum");
	}
	
	public function getConexion()
	{
		if(self::$conexion == null){
			return self::$conexion = new conexion;
		}else{
			return self::$conexion;
		}
	}
}
?>