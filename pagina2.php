<!DOCTYPE html>
<html lang="en">
<head>
    <title>Operadores PHP</title>
    <meta charset="utf-8">
    <!-- Icono de la página -->
    <link rel="icon" type = "image/png" href = "/img/logo.png"/>
    <!-- Hojas de estilo de la página -->
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <h1>Sistemas</h1>
    <h2>Guanentá</h2>
    <hr>
    <?php
        $a = 10;
        $b = 15;
        echo ("La suma de 10 y 15 es: ".($a+$b). "<br/>");
        echo ("La residuo de 15 y 10 es: ".($a%$b). "<br/>");
        echo ("La variable \$a con incremento: ".(++$a). "<br/>");
    ?>
</body>
</html>