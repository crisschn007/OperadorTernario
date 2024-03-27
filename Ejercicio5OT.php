<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    
    $edad=79;

    $mensaje=($edad<18)?"Usted es menor de edad": ( ($edad>65)? "Usted no tiene acceso por que es mayor a 65":"Usted tiene acceso");

    echo $mensaje;
    ?>

</body>
</html>