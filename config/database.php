<?php

    class Conectar{

        public static function conexion(){
            $conexion = new mysqli("us-cdbr-east-03.cleardb.com:3306","b36ace11129452","16c987a7","heroku_2d2a0ab3712a880");
            return $conexion;
        }
    } 