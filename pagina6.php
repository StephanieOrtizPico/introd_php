<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrucciones condicionales en PHP</title>
</head>
<body>
    <h1>Intrucciones condicionales en PHP</h1>
    <?php
    // esto es un script de php 

    // asignamos a la variable color el valor rojo 
    $color = "rojo";

    // preguntamos si la variable color es igual a roja. si son iguales se ejecuta la siguiente parte del código
    if($color = "rojo")
    {
        // como se cumple la condición se mostrará este mensaje en pantlla 
        print("Efectivamente el color es rojo");
    }

    ?>
</body>
</html>