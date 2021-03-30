<?php

    class VehiculosController{

        public function __construct()
        {
            require_once "models/VehiculosModel.php";
        }

        public function index(){
            require_once "models/VehiculosModel.php";
            $vehiculos = new Vehiculos_model();
            $data["titulo"] = "Vehiculos";
            $data["vehiculos"] = $vehiculos->get_vehiculos();
            
            require_once "views/vehiculos/vehiculo.php";
        }

        public function nuevo(){
            $data["titulo"] = "Vehiculos";
            require_once "views/vehiculos/vehiculo_nuevo.php";
        }
        
        public function guarda(){

            $placa = filter_var($_POST['placa'], FILTER_SANITIZE_SPECIAL_CHARS);
            $marca = filter_var($_POST['marca'], FILTER_SANITIZE_SPECIAL_CHARS);
            $modelo = filter_var($_POST['modelo'], FILTER_SANITIZE_SPECIAL_CHARS);
            $anio = filter_var($_POST['anio'], FILTER_SANITIZE_SPECIAL_CHARS);
            $color = filter_var($_POST['color'], FILTER_SANITIZE_SPECIAL_CHARS);

            $vehiculos = new Vehiculos_model();
            $vehiculos->insertar($placa, $marca, $modelo, $anio, $color);

            $data["titulo"] = "Vehiculos";
            header("Location:index.php");
        }

        public function modificar($id){
            $vehiculos = new Vehiculos_model();
            $data["id"] = $id;
            $data["vehiculos"] = $vehiculos->get_vehiculo($id);
            $data["titulo"] = "Modificar vehiculo";
            require_once "views/vehiculos/modifica.php";
        }

		public function actualizar(){

			$id = $_POST['id'];
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];

			$vehiculos = new Vehiculos_model();
			$vehiculos->modificar($id, $placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "Vehiculos";
			header("Location:index.php");
		}
		
		public function eliminar($id){
			
			$vehiculos = new Vehiculos_model();
			$vehiculos->eliminar($id);
			$data["titulo"] = "Vehiculos";
			header("Location:index.php");
		}	
}