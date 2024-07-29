<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores comparación, operadores lógicos, union de cadenas</title>
</head>
<body>
    <?php
        // Operadores de comparación
        $a = 5;
        $b = 10;

        // Igualdad
        if ($a == $b) {
            echo "$a es igual a $b<br>";
        } else {
            echo "$a no es igual a $b<br>";
        }

        // Distinto
        if ($a != $b) {
            echo "$a no es igual a $b<br>";
        } else {
            echo "$a es igual a $b<br>";
        }

        // Mayor que
        if ($a > $b) {
            echo "$a es mayor que $b<br>";
        } else {
            echo "$a no es mayor que $b<br>";
        }

        // Operadores lógicos
        $c = 3;
        $d = 8;

        // AND lógico
        if ($c > 0 && $d > 0) {
            echo "$c y $d son ambos mayores que 0<br>";
        } else {
            echo "Al menos uno de $c o $d no es mayor que 0<br>";
        }

        // OR lógico
        if ($c > 5 || $d > 5) {  
            echo "$c o $d es mayor que 5<br>";
        } else {
            echo "Ni $c ni $d son mayores que 5<br>";
        }

        // Concatenación de cadenas
        $mensaje1 = "Hola";
        $mensaje2 = "Mundo";

        $mensaje_completo = $mensaje1 . ", " . $mensaje2 . "!";
        echo $mensaje_completo;
    ?>

</body>
</html>