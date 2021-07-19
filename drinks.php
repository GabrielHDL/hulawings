<?php

$title = "Drinks | HULA Wings&reg;";
$description = "Los mejores tragos los encuentras en HULA Wings 🍹";
$og_name = "HULA Wings&reg;";
$og_img = "hula_drinks_og_img.jpg";

include_once 'functions.php';

$objeto = new COnexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM drinks";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$drinks = $resultado ->fetchAll(PDO::FETCH_ASSOC);


require 'views/header.php';
require 'views/drinks.view.php';
require 'views/footer.php';

?>