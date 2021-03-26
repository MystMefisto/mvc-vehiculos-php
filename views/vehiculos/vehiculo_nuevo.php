<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php //echo $data['titulo']; ?></title>
</head>

<body>
    <h2> <?php //echo $data['titulo']; ?> </h2>

    <form id="nuevo" name="nuevo" method="POST" action="" autocomplete="off">
        <label for="placa">Placa:</label> <input type="text" name="placa" id="placa"> <br>
        <label for="marca">Marca:</label> <input type="text" name="marca" id="marca"> <br>
        <label for="modelo">Modelo:</label> <input type="text" name="modelo" id="modelo"> <br>
        <label for="anio">Año:</label> <input type="text" name="anio" id="anio"> <br>
        <label for="color">Color:</label> <input type="text" name="color" id="color"> <br>
        <button id="guardar" name="guardar" type="submit">Guardar</button>
    </form>

</body>

</html>