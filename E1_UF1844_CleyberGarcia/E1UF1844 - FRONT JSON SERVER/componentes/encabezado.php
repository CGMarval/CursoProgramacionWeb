<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera fija</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script defer src="principal.js"></script>
	<style>
		.efecto-hover li:hover {
			background-color: orange;
			/* Otros estilos opcionales */
			color: white; /* Cambia el color del texto al blanco */
			/* Agrega transición suave para el cambio de color */
			transition: background-color 0.3s ease;
			border-radius: 5px;
		}
	</style>
</head>

<body>
	<header>
		<div class="container-fluid text-center">
			<div class="row">
				<div class="col">
					<img id="logo-imagen" src="./logos/URBAN_LOGO_2021.png" alt="Logo" id="logo" width="240px"/>
				</div>
			</div>
			<div class="row"> 
				<div class="col">
					<nav class="navbar navbar-expand-lg bg-body-tertiary">
						<div class="container-fluid">
							<!-- <a class="navbar-brand" href="#">Navbar</a> -->
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0 efecto-hover">
								<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Comprar</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="#">Alquiler</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="#">Vender</a>
								</li>
							</ul>
							<form class="d-flex" role="search">
								<input class="form-control me-2" type="search" placeholder="Busca Aquí" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Buscar</button>
							</form>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
</body>
</html>