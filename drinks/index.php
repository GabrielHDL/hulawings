<?php

include_once '../admin/config_files/config.php';

$title = "$drinks_title | $site_title";
$description = "Los mejores tragos los encuentras en HULA Wings 🍹";
$og_name = "HULA Wings&reg;";
$og_img = "hula_drinks_og_img.jpg";
$canonical = "https://hulawings.com/drinks/";

include_once '../functions.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM drinks ORDER BY rand()";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$drinks = $resultado ->fetchAll(PDO::FETCH_ASSOC);


require '../views/header.php';
require '../views/drinks.view.php';
require '../views/footer.php';

?>