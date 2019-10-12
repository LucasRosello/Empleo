<?php
function conexion()
{
	$usuario ="root";
	$pass = "";
	try {

		$con = new PDO('mysql:host=localhost;dbname=trabajo', $usuario, $pass );
		return $con;
		
	} catch (PDOException $e) {
		return $e->getMessage();
	}
}

?>