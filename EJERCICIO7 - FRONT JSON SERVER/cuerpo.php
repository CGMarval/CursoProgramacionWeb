<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="cuerpo.js"></script>
    <script src="https://kit.fontawesome.com/9afaeb48c9.js" crossorigin="anonymous"></script>
</head>

<body>
    <br>
    <div class="container text-center">
        <div class="row row-cols-auto">
            <div class="col">
                <form action="" id="filtro" method="post">
                    <select name="familias" id="familias"></select>
                </form>
            </div>
            <div class="col">Ordenar por</div>
        </div>
    </div>
    <br>
    <div id="listado" class="d-flex flex-wrap justify-content-center"></div>
    <div id="contenedor" class="container-fluid">
        <div class="row">
            <div class="col">
                <img src=" " alt="">
            </div>
            <div class="col">
                <span>Nombre:</span>
            </div>
            <div class="col">
                <span>Apellidos:</span>
            </div>
            <div class="col">
                <span>Email:</span>
            </div>
            <div class="col">
                <span>Telefono:</span>
            </div>
            <div class="col">
                Web:
            </div>
            <div class="col">
                <ul class="d-flex">
                    <li><i class="fa-solid fa-pencil fa-xl"></i></li>
                    <li><i class="fa-solid fa-trash-can fa-lg"></i></li>
                </ul>
            </div>
        </div>

    </div>
</body>

</html>