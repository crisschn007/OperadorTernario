<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    $digito=0;
    $comparar=($digito>=0 && $digito<=9)  ? "El dato es un digito" : "El dato no es un digito";
    echo("Digito: ". $digito . "<br>" );
    echo $comparar."<br>";
    ?>
</body>
</html>