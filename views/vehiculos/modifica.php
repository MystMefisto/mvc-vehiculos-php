<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['titulo']; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/497566ac46.js" crossorigin="anonymous"></script>
</head>

<body style="background:#484848;">
    <h2 class="text-warning text-center mt-5"> <?php echo $data['titulo']; ?> </h2>

    <form class="text-white container text-center col-10 mt-2" id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=actualizar" autocomplete="off">
        <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>">
        <p class="text-white">Modifica los datos de un vehiculo ya existentes</p>
        <div class="form-group w-100">
            <label class="font-weight-bold" for="placa">Placa:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="placa" id="placa" value="<?php echo $data["vehiculos"]["placa"]; ?>"> <br>
        </div>
        <div class="form-group w-100">
            <label class="font-weight-bold" for="marca">Marca:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="marca" id="marca" value="<?php echo $data["vehiculos"]["marca"]; ?>"> <br>
        </div>
        <div class="form-group w-100">
            <label class="font-weight-bold" for="modelo">Modelo:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="modelo" id="modelo" value="<?php echo $data["vehiculos"]["modelo"]; ?>"> <br>
        </div>
        <div class="form-group w-100">
            <label class="font-weight-bold" for="anio">Año:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="anio" id="anio" value="<?php echo $data["vehiculos"]["anio"]; ?>"> <br>
        </div>
        <div class="form-group w-100">
            <label class="font-weight-bold" for="color">Color:</label> 
            <input class="bg-dark text-white m-1 d-inline form-control w-50" type="text" name="color" id="color" value="<?php echo $data["vehiculos"]["color"]; ?>"> <br>
        </div>
        <button class="btn btn-warning btn-lg mt-4 w-25 m-1 d-inline form-control w-50" id="guardar" name="guardar" type="submit"> <i class="fas fa-save"></i> Guardar </button>
    </form>

</body>

</html>