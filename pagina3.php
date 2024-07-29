<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Definir una constante
        define("PI", 3.14159);

        // Definir una constante con un array
        define("FRUTAS", ['manzana', 'pera', 'naranja']);

        // Utilizar la constante PI
        echo "El valor de PI es: " . PI . "<br>";
    
        // Utilizar la constante FRUTAS
        echo "Mis frutas favoritas son: " . implode(", ", FRUTAS);
    ?>

</body>
</html>