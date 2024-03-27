<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
  $edad=69;

  $mensaje = ($edad<=17) ? "Usted es menor de edad" :(($edad>=18 && $edad<=65)? "Usted tiene acceso, bienvenido a intecap":
  (($edad>65) ? "Usted no tiene acceso porque es mayor a 65":"Usted no tiene acceso") );

  echo $mensaje;
    ?>
</body>
</html>