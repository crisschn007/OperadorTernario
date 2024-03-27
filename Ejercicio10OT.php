<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
    /*
      $edad=69;

  $mensaje = ($edad<=17) ? "Usted es menor de edad" :(($edad>=18 && $edad<=65)? "Usted tiene acceso, bienvenido a intecap":
  (($edad>65) ? "Usted no tiene acceso porque es mayor a 65":"Usted no tiene acceso") );

  echo $mensaje;
    */
    $categoria="estudiante";

    $descuento= ($categoria=="estudiante") ? "Se le aplica el 20% de descuento":
    (($categoria=="mayorista")?"Se le aplica el 15% de descuento":"No se le aplica ningun  descuento");
   
    echo  "Categoría: ".$categoria."<br>";
    echo  "Descuento: ". $descuento . "<br>" ;
    ?>
</body>
</html>