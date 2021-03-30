<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/497566ac46.js" crossorigin="anonymous"></script>
    <title><?php echo $data['titulo']; ?></title>
</head>

<body style="background:#484848;">
    <h1 class="text-primary text-center mt-5"> <?php echo $data['titulo']; ?> </h1>

    <form class="container text-center col-10 text-white mt-2 font-weight-bold" id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">
    <p class="text-white">Añade un nuevo vehículo</p>
        <div class="form-group w-100">
            <label for="placa">Placa:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="placa" id="placa"> <br>
        </div>
        <div class="form-group w-100">
            <label for="marca">Marca:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="marca" id="marca"> <br>
        </div>
        <div class="form-group w-100">
            <label for="modelo">Modelo:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="modelo" id="modelo"> <br>
        </div>
        <div class="form-group w-100">
            <label for="anio">Año:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="anio" id="anio"> <br>
        </div>
        <div class="form-group w-100">
            <label for="color">Color:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="color" id="color"> <br>
        </div>
        <button class="btn btn-primary btn-lg mt-4 w-25 m-1 d-inline form-control w-50" id="guardar" name="guardar" type="submit"> <i class="fas fa-save"></i> Crear nuevo vehículo </button>
    </form>

</body>

</html>