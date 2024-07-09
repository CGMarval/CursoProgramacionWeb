<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #contenedor {
            padding-top: 75px;
            padding-left: 350px;
            padding-right: 350px;
            padding-bottom: 75px;
        }
    </style>
</head>

<body>

    <div class="content text-center" id="contenedor">
        <div class="col">
            <h3>Formulario de Contacto</h3>
            <br>
        </div>
        <div class="col">
            <form action="formpost.php" method="post">
                <div class="form-group row">
                    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre :</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nombre" class="form-control" id="inputNombre" placeholder="su nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="text" name="Email" class="form-control" id="inputEmail" placeholder="email@example.com">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

</body>

</html>