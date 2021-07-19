<?php

$title = "Bajón | Hula Wings&reg;";
$description = "¿Segur@ que has probado las mejores alitas? 🍗";
$og_name = "Hula Wings&reg;";
$og_img = "hula_bajon_og_img.jpg";

include_once 'functions.php';

$objeto = new COnexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM bajon";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$bajones = $resultado ->fetchAll(PDO::FETCH_ASSOC);

require 'views/header.php';
require 'views/bajon.view.php';
require 'views/footer.php';

?>