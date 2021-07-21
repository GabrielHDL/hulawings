<?php

include_once 'admin/config_files/db_config.php';

class Conexion{
    public static function Conectar() {
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4');
        try {
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password,
            $opciones);
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es:". $e->getMessage());
        }
    }
}

function conexion2($tabla, $usuario, $pass) {
    try {
        $conexion2 = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
        return $conexion2;
    } catch (PDOException $e) {
        return false;
    }
}

?>