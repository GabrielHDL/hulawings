<?php

include_once '../admin/config_files/config.php';

$title = "$bajon_title | $site_title";
$description = "¿Segur@ que has probado las mejores alitas?". ' | ' . $site_title;
$og_name = "HULA Wings&reg;";
$og_img = "hula_bajon_og_img.jpg";
$canonical = URL . 'snacks/';

include_once '../functions.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM bajon";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$bajones = $resultado ->fetchAll(PDO::FETCH_ASSOC);

require '../views/header.php';
require '../views/bajon.view.php';
require '../views/footer.php';

?>