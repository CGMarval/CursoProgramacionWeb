<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $pais = "Francia";
    echo "<h1>$pais</h1>";
    $moneda=["espana" => "Peseta","francia" => "Franco", "usa" => "Dolar"];
    echo "<h2> Moneda: {$moneda['francia']}</h2>";

    $valor1 = 500;
    $valor2 = "200";

    echo "<h3>php permite sumar variables siendo una numérica y otra tipo texto, convirtiendo el texto en número</h3>";
    echo "$valor1 + $valor2 es igual a: ".$valor1+$valor2;

    echo var_dump($moneda);

    $a = 2;
    $b = "2";
    $c = "2";
    if ($a == $b){
        echo "<p>Variables iguales no necesariamente identicas</p>";
    }
    if ($a == $b && $b == "2" ){
        echo "$a y $b no son identicos";
    }

    $dni = "17558434";
    echo "Mi DNI es : $dni";
    $letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
    $letra = $letras[$dni % 23];
    echo "<p>Mi DNI es : $dni $letra</p>";

    ?>
</body>
</html>