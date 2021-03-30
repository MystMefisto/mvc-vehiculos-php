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
    <h1 class="text-white text-center mt-5"> <?php echo $data['titulo']; ?> </h1>


    <div class="mx-auto col-11">
    <a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary btn-lg">
        <i class='far fa-plus-square'></i> AÑADIR
    </a>
    </div>


    <br>
    <br>
    <div class="mx-5">
    <table class="table table-striped table-dark" border="1" width="80%">
        <thead>
            <tr class="text-center">
                <th scope="col">Placa</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Año</th>
                <th scope="col">Color</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            foreach($data["vehiculos"] as $dato){
                echo "<tr>";
                echo "<td>".$dato["placa"]."</td>";
                echo "<td>".$dato["marca"]."</td>";
                echo "<td>".$dato["modelo"]."</td>";
                echo "<td>".$dato["anio"]."</td>";
                echo "<td>".$dato["color"]."</td>";
                echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato['id']."'> <i style='width:50px; height:auto;' class='fas fa-pen-square btn d-inline my-1'></i>Editar </a></td>";
                echo "<td><a class='text-danger' href='index.php?c=vehiculos&a=eliminar&id=".$dato['id']."'> <i style='width:50px; height:auto;' class='fas fa-trash btn btn-danger d-inline my-1'></i> Eliminar </a></td>";
                echo "</tr>";
            } 
            
            ?>
        </tbody>
    
    </table>
    </div>
</body>

</html>