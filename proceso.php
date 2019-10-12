<?php
require('conexion.php');
class procesos {
	 function textodb()
	{
		$con = conexion();
		$consulta = $con->prepare("SELECT * from trabajo");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}




	function mostrarlista()
		{
			$con = conexion();
			$consulta = $con->prepare("SELECT link FROM links ORDER BY links.id ASC ");
			$consulta->execute(array());
			$resultado = $consulta->fetchAll();
			return $resultado;
		}


}

	

?>