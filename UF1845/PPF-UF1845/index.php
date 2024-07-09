
<?php require('./templates/header.php'); ?>

<body>
    <div class="container">
        <h1>Calculadora de Precio Medio</h1>
        <form id="priceForm" method="post">
            <div class="product">
                <h2>Producto</h2>
                <label for="precio-tienda-1">Tienda 1:</label>
                <input type="number" id="precio-tienda-1" name="precio-tienda-1" step="0.01" required>
                <label for="precio-tienda-2">Tienda 2:</label>
                <input type="number" id="precio-tienda-2" name="precio-tienda-2" step="0.01" required>
                <label for="precio-tienda-3">Tienda 3:</label>
                <input type="number" id="precio-tienda-3" name="precio-tienda-3" step="0.01" required>
            </div>
            <button type="submit">Calcular Precio Medio</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los valores enviados por POST
            // $precioTienda1 = $_POST['precio-tienda-1'];
            // $precioTienda2 = $_POST['precio-tienda-2'];
            // $precioTienda3 = $_POST['precio-tienda-3'];
            header("Location: resultado.php");
            exit;
        }
        ?>

    </div>

<?php require('./templates/footer.php'); ?>