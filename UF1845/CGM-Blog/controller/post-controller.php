<?php

	include_once "./model/connect-db.php";

	/**
 * Devuelve todo el listado de posts
 */
function get_all_posts() {
	global $conecta; // variable global que guarda la información de conexión a la base de datos

	// Verificar si la conexión está establecida correctamente
    if (!$conecta) {
        die("Error de conexión: " . mysqli_connect_error());
    }

	$sql = "SELECT * from posts";
    $resultado = $conecta->query($sql);

	return $resultado;
}


/**
 * Inserta un nuevo post en la base de datos
 */
function insert_post( $title, $excerpt, $content ) {
	global $conecta;

	$published_on = date( 'Y-m-d H:i:s' );

	// Prepara la consulta SQL con marcadores de posición
	$result = $conecta->prepare("INSERT INTO posts
	( title, excerpt, content, published_on )
	VALUES
	( ?, ?, ?, ?)"); // Se utiliza ? como marcadores de posición en lugar de incluir directamente las variables.
	
	if ($result === false) {
        die('Prepare failed: ' . htmlspecialchars($conecta->error));
    }
	
	// Vincular parámetros a la declaración preparada
	$result->bind_param("ssss",$title, $excerpt, $content, $published_on);

	// Ejecutar la declaración preparada.
	if (!$result->execute()) {
        die('Execute failed: ' . htmlspecialchars($result->error));
    }

	$result->close();

	/** ======================== Beneficios de las Declaraciones Preparadas y bind_param ============================
		*Seguridad: Las declaraciones preparadas ayudan a prevenir la inyección SQL, ya que los valores de los parámetros se escapan automáticamente.
		*Eficiencia: Las declaraciones preparadas pueden ser ejecutadas múltiples veces con diferentes parámetros, lo que puede mejorar la 	eficiencia en ciertas aplicaciones.
		*Legibilidad: El uso de marcadores de posición ? y la vinculación posterior de variables puede hacer que el código SQL sea más limpio y más fácil de leer.
	
		*En resumen, la línea $stmt->bind_param("ssss", $title, $excerpt, $content, $published_on); vincula cuatro variables PHP a una declaración preparada en SQL, asegurando que se traten como cadenas de caracteres y ayudando a proteger contra la inyección SQL. 
	*/


}


/**
 * Busca y devuelve un sólo post
 * Si no lo encuentra, devuelve false
 */
function get_post( $post_id ) {
	global $conecta;
	$query = "SELECT * FROM posts WHERE id = $post_id";
	$result = mysqli_query( $conecta, $query );
	if ( ! $result ) {
		die( mysqli_error( $conecta ) );
	}

	return mysqli_fetch_assoc( $result );
}