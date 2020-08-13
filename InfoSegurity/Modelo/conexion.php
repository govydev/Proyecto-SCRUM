<?php
class conexion{
	public static $conexion = null;

	private function conexion()
	{
		if(!isset($this->conexion)){
			self::$conexion= new mysqli("localhost","root","", "scrum") or die(mysql_error());
		}
		self::$conexion->set_charset('utf8');
	}
	
	public function getConexion()
	{
		if(self::$conexion == null){
			return new conexion;
		}else{
			return self::$conexion;
		}
	}

	public function query($consulta){
		return $result = self::$conexion->query($consulta);
	}

}
?>