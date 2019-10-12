<?php 

function conexion($usuario, $pass)
	{
		try {

			$con = new PDO('mysql:host=localhost;dbname=trabajo', $usuario, $pass );
			return $con;
			
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	// extraccion de datos para div de trabajo
	function contacto()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from contactos");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}

	function direcciones()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from direcciones");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}

	function estado()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from estado");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}

	function estadocivil()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from est_civil");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}

	function experiencia()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from experiencia");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}

	function habilidades()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from habilidades");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}

	function links()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from links");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}

	function localidad()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from localidad");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}

	// extraccion de datos para los puestos de trabajo

	function trabajo()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from trabajo");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}

class usuarios{
	function registrar($datos)
	{
	$conexion = conexion();
	$consulta = $conexion->prepare("INSERT INTO `usuarios`(`Nombre`, `Apellido`, `Usuario`, `Pais`, `Edad`) VALUES (:Nombre,:Apellido,:Usuario,:Pais,:Edad)");
	$consulta->execute(array(
				":Nombre"=>$datos[0],
				":Apellido"=>$datos[1],
				":Usuario"=>$datos[2],
				":Pais"=>$datos[3],
				":Edad"=>$datos[4],


	));
}
}

class procesos {
	 function textodb()
	{
		$con = conexion("root", "");
		$consulta = $con->prepare("SELECT * from trabajo");
		$consulta->execute(array());
		$resultado = $consulta->fetchAll();
		return $resultado;
	}


	function mostrarlista()
		{
			$con = conexion("root", "");
			$consulta = $con->prepare("SELECT link FROM links ORDER BY links.id ASC ");
			$consulta->execute(array());
			$resultado = $consulta->fetchAll();
			return $resultado;
		}


}



?>