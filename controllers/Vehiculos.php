<?php

    class VehiculosController{

        public function index(){
            require_once "models/VehiculosModel.php";
            $vehiculos = new Vehiculos_model();
            $data["titulo"] = "vehiculos";
            $data["vehiculos"] = $vehiculos->get_vehiculos();
            
            require_once "views/vehiculos/vehiculo.php";
        }
    }