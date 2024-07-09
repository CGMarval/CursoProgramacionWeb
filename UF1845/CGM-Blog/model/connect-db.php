<?php
////////////////////////////////////////////////////////////////////////
///////////// Creamos la conexión a la base de datos //////////////////
//
///// inicializamos las variables
	$servidor = "127.0.0.1";
	$puerto = 3306;
	$dbname = "microcms";
	$usuario = "root";
	$contraseña = "";
	$charset = "utf8";
//
///// conectamos con la base de datos
	$conecta = new mysqli($servidor, $usuario, $contraseña, $dbname, $puerto, $charset);
//
///// verificamos la conexión
	if ($conecta->connect_error) {
		die("Error de conexión: " . $conecta->connect_error);
	}
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
?>