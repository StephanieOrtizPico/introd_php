<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para manipular cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>
    <?php
        // substr

        $cadena = "Hola mundo";

        // Obtener los primeros 4 caracteres
        $subcadena1 = substr($cadena, 0, 4);
        echo $subcadena1 . "<br>";  // Esto mostrará "Hola"

        // Obtener los caracteres desde el índice 5 hasta el final
        $subcadena2 = substr($cadena, 5);
        echo $subcadena2 . "<br>";  // Esto mostrará "mundo"


        // ord

        // Obtener el valor ASCII del carácter 'A'
        $ascii_value = ord('A');
        echo "El valor ASCII de 'A' es: " . $ascii_value . "<br>";  // Esto mostrará "El valor ASCII de 'A' es: 65"

        // Obtener el valor ASCII del carácter '7'
        $ascii_value = ord('7');
        echo "El valor ASCII de '7' es: " . $ascii_value . "<br>";  // Esto mostrará "El valor ASCII de '7' es: 55"

        // También se puede usar ord() con variables que contienen caracteres
        $caracter = '!';
        $ascii_value = ord($caracter);
        echo "El valor ASCII de '$caracter' es: " . $ascii_value . "<br>";  // Esto mostrará "El valor ASCII de '!' es: 33"


        // printf

        // Definir variables
        $nombre = "Juan";
        $edad = 30;
        $altura = 1.75;

        // Imprimir usando printf con formato
        printf("Nombre: %s<br>", $nombre);        // %s se sustituye por $nombre
        printf("Edad: %d<br>", $edad);            // %d se sustituye por $edad (entero)
        printf("Altura: %.2f m<br>", $altura);    // %.2f se sustituye por $altura (número de punto flotante con 2 decimales)

        // sprintf

        // Definir variables
        $nombre = "María";
        $edad = 25;
        $altura = 1.68;

        // Usar sprintf para formatear una cadena
        $mensaje = sprintf("Nombre: %s, Edad: %d años, Altura: %.2f m", $nombre, $edad, $altura);

        // Mostrar el resultado
        echo $mensaje;


        // strtolower

        // Cadena de texto original
$cadena = "HOLA MUNDO";

// Convertir la cadena a minúsculas
$cadena_minusculas = strtolower($cadena);

// Mostrar el resultado
echo "Cadena original: " . $cadena . "<br>";
echo "Cadena en minúsculas: " . $cadena_minusculas . "<br>";

        // strtoupper

        // Cadena de texto original
$cadena = "hola mundo";

// Convertir la cadena a mayúsculas
$cadena_mayusculas = strtoupper($cadena);

// Mostrar el resultado
echo "Cadena original: " . $cadena . "<br>";
echo "Cadena en mayúsculas: " . $cadena_mayusculas . "<br>";

        // ereg

        // Cadena de texto a evaluar
$cadena = "Hola Mundo";

// Verificar si la cadena contiene la palabra "Mundo" usando ereg
if (ereg("Mundo", $cadena)) {
    echo "La cadena contiene la palabra 'Mundo'.";
} else {
    echo "La cadena NO contiene la palabra 'Mundo'.";
}

        // eregi

        // Cadena de texto a evaluar
$cadena = "Hola Mundo";

// Verificar si la cadena contiene la palabra "mundo" sin importar mayúsculas o minúsculas usando eregi
if (eregi("mundo", $cadena)) {
    echo "La cadena contiene la palabra 'mundo' (ignorando mayúsculas y minúsculas).";
} else {
    echo "La cadena NO contiene la palabra 'mundo' (ignorando mayúsculas y minúsculas).";
}
    ?>
</body>
</html>