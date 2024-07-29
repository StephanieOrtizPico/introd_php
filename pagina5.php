<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Ejemplo de instrucción if
$hora = date("H"); // Obtener la hora actual en formato de 24 horas

if ($hora < "12") {
    echo "Buenos días<br>";
}

// Ejemplo de instrucción if-else
$edad = 18;

if ($edad >= 18) {
    echo "Eres mayor de edad<br>";
} else {
    echo "Eres menor de edad<br>";
}

// Ejemplo de instrucción elseif
$puntuacion = 75;

if ($puntuacion >= 90) {
    echo "Excelente puntuación!<br>";
} elseif ($puntuacion >= 70) {
    echo "Buena puntuación<br>";
} elseif ($puntuacion >= 50) {
    echo "Puntuación aceptable<br>";
} else {
    echo "Necesitas mejorar tu puntuación<br>";
}
?>

</body>
</html>