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

    <div class="container text-center">
        <div class="row">
            <div class="col">
            </div>
            <div id="contenedor" class="col-8">

            </div>
            <div class="col">
            </div>
        </div>
    </div>
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detalles de la Propiedad</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="contenedor-modal" class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

    <!-- <div id="contenedor" class="container-fluid text-center justify-content-center">

    </div> -->
</body>

</html>