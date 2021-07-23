<?php

include_once '../admin/config_files/config.php';
include_once '../functions.php';

$title = "$snack_title | $site_title";
$description = "¿Snacks? los reinventamos en HULA Wings." . ' | ' . $site_title;
$og_name = "HULA Wings&reg;";
$canonical = URL . 'snacks/snack';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
    header('Location: index');
}

$statement = $conexion->prepare("SELECT * FROM bajon WHERE id = :id");
$statement->execute(array(':id' => $id));

$snack = $statement->fetch();

if (!$snack) {
    header('Location: /snacks/');
}

require '../views/snack.header.php';
require '../views/snack.view.php';
require '../views/footer.php';

?>