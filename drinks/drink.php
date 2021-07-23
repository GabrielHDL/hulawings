<?php

include './votaciones.php';
include_once '../admin/config_files/config.php';
include_once '../functions.php';

$title = "$product_title | $site_title";
$description = "Los mejores drinks en HULA Wings." . ' | ' . $site_title;
$og_name = "HULA Wings&reg;";
$canonical = URL . 'drinks/drink';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
    header('Location: index');
}

$statement = $conexion->prepare("SELECT * FROM drinks WHERE id = :id");
$statement->execute(array(':id' => $id));

$drink = $statement->fetch();

if (!$drink) {
    header('Location: /drinks');
}

require '../views/drink.header.php';
require '../views/drink.view.php';
require '../views/footer.php';

?>