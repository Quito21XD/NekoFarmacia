<?php

	$mysqli = new mysqli('localhost','root','','sis_venta');

	if($mysqli-> connect_error){

		die('Error en la conexion' . $mysqli-> connect_error);
	}

?>