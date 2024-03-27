<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
   $num1=15;
   $num2=7;
   $num3=9;

   $mayor=($num1>$num2) ?($num1>$num3 ? $num1 : $num3):($num2>$num3 ? $num2 : $num3);
   echo"<h3>El numero mayor es: ".$mayor."</h3>";
   ?>
</body>
</html>