<?php
////////////////////////////////////////////////////
/// Configura la salida de errores por pantalla ///
error_reporting(E_ALL);
ini_set('display_errors', 1);

//////////////////////////////////////////////////////////////////////////////////////////////////////////
///////// Integra la función date default timezone set con la hora correspondiente a Canarias ////////////
Setlocale(LC_TIME, 'es', 'spa', 'es_ES');
date_default_timezone_set('Atlantic/Canary');
/////////////////////////////////////////////////////////////////////////////////////////////////////////


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

// consulta para obtener los posts
$sql = "SELECT * from posts";
$resultado = $conecta->query($sql);

// Declaramos el array asociativo para almacenar los posts recogidos de la BD
$all_posts = array();

if ($resultado->num_rows > 0) {
	while ($row = $resultado->fetch_assoc()) {
		$all_posts[] = $row;
	}
}


///////////////////////////////////////////////////////////////////////////////////////////////
///////////// Creamos el array asociativo, llenando su contenido manualmente //////////////////
// $all_posts = [
// 	[
// 		'id' => 1,
// 		'title' => 'Detenido Bitcoin Jesus en España',
// 		'excerpt' => 'El pionero inversor cripto acusado de evadir más de 45 millones de euros',
// 		'content' => 'Otro inversor cripto de referencia ha sido detenido. Si la semana pasada se condenó a prisión al CEO de Binance, ahora es el ex-CEO de Bitcoin.com el que ha sido detenido por fraude fiscal. Roger Ver, nacido en San José y residente en Japón, fue uno de los primeros inversores reconocidos de las criptomonedas, allá por 2011. Su empresa, MemoryDealers, fue una de las primeras en aceptar pagos del Bitcoin. Roger Ver también es uno de los cinco fundadores de la Bitcoin Fundation y actualmente es uno de los principales impulsores del Bitcoin Cash. Todos estos movimientos son los que llevaron a catalogarlo popularmente con el nombre de "Bitcoin Jesus". Pero ahora ha sido detenido en España, acusado por el Departamento de Justicia de los Estados Unidos de defraudar más de 45 millones de euros en impuestos, según describe Reuters.',
// 		'published_on' => '2018-01-11 10:15:00',
// 	],
// 	[
// 		'id' => 2,
// 		'title' => 'Japón ya tiene su primer prototipo con 6G: los resultados han sido un éxito',
// 		'excerpt' => '100 Gbps por segundo en interiores. Los gigantes de telecomunicaciones de Japón ya experimentan con el 6G',
// 		'content' => 'El 5G ya forma parte de prácticamente cualquier teléfono, aunque los primeros experimentos con el 6G ya están sobre la mesa. Ya ha satélites 6G en órbita para probar esta tecnología, países como Corea del Sur están probando algunos proyectos con ella, y España está aprobando las primeras ayudas para usarla. Japón ha presentado, en colaboración con algunas de las grandes empresas de telecomunicaciones del país, su primer prototipo 6G. Han logrado hacerlo funcionar a una velocidad notablemente superior que la del 5G, alcanzando los 100 Gbps en interiores.',
// 		'published_on' => '2018-01-11 10:15:00',
// 	],
// ];
///////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Micro CMS</title>
	<link rel="stylesheet" href="assets/style.css">
</head>

<body>

	<nav id="site-navigation" role="navigation" class="row row-center">
		<div class="column">
			<h1>
				<a href="index.php">Micro CMS</a>
			</h1>
			<ul class="main-menu column clearfix">
			</ul>
		</div>
	</nav>

	<div id="content">
		<div class="posts">
			<?php foreach ($all_posts as $post) : ?>
				<article class="post">
					<header>
						<h2 class="post-title">
							<?php echo $post['title']; ?>
						</h2>
					</header>
					<div class="post-content">
						<?php echo $post['content']; ?>
					</div>
					<footer class="post-published_on">
						<?php echo $date = date('d M Y', strtotime($post['published_on'])); ?>
					</footer>
				</article>
			<?php endforeach; ?>
		</div>
	</div>

	<!-- ///////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////// Bloque HTML del Ejercicio 2 ///////////////////////// -->
	<div class="content text-center" id="contenedor">
		<div class="col">
			<h3>Formulario Ejercicio2</h3>
			<br>
		</div>
		<div class="col">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group row">
					<label for="inputCampoEntrada" class="col-sm-2 col-form-label">Campo de entrada :</label>
					<div class="col-sm-10">
						<input type="text" name="campoEntrada" class="form-control" id="inputCampoEntrada" placeholder="Escribe algo">
					</div>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
	</div>

	<!-- Script PHP del Ejercicio 2 -->
	<?php
	// Procesamiento del formulario
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Verificar si el campo "campo" está presente en la solicitud POST
		if (isset($_POST['campoEntrada'])) {
			// Obtener el valor del campo "campo"
			$valorCampo = $_POST['campoEntrada'];

			// Hacer algo con el valor, como imprimirlo
			echo "<p>El valor del campo es: " . htmlspecialchars($valorCampo) . "</p>";
		} else {
			// Si el campo no está presente, mostrar un mensaje de error
			echo "<p>El campo no está presente en la solicitud POST.</p>";
		}
	}
	?>


	<!-- ///////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////// Bloque del Ejercicio 3 ///////////////////////// -->
	<?php
	$suma = 0;
	for ($i = 1; $i <= 1000; $i++) {
		$suma = $suma + $i;
	}
		echo "La suma vale $suma";
	?>


	<footer id="footer">
		<div id="inner-footer">
			Microgestor en PHP · IFCD0210
		</div>
	</footer>
</body>

</html>