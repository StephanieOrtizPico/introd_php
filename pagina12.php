<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en php</title>
</head>
<body>
    <h1>Funciones en php</h1>
    <?php
        /*Una función es un bloque de códif¿go que introducimos en nuestra página y que uede ser utilizado a lo largo de todo nuestro código php. La principal ventaja de las funciones es que nos permite ahorrar código*/
        
        /*Para definir funciones se emplea la sentencia function. Las funciones pueden recibir tantos argumentos como sean necesarios, separándolos por comas*/

        echo "<h1>";
        function suma($x, $y)
        {
            $z = $x + $y;
            return $z;
        }

        $resultado = suma(5,12);
        echo "<br>";
        echo $resultado;
        echo "</h1>";
    ?>
</body>
</html>