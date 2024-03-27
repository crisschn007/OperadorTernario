<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php

    $promedio=65;

    $premio = ($promedio > 90) ?  "Viaje a Disney" :
    (($promedio >=80 && $promedio<=90) ? "Viaje a Peten" :
    (($promedio>=70 && $promedio<=80)  ? "Viaje a las Georginas" :
    " Debes Estudiar Más")) ;

    echo "Tu promedio es: ". $promedio . "<br>";
    echo "Por lo tanto, tu premio es: ". $premio;
    ?> 
</body>
</html>