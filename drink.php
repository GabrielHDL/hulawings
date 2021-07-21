<?php
include './votaciones.php';
include_once 'admin/config_files/config.php';
include_once 'functions.php';

$title = "$product_title | $site_title";
$description = "Los mejores drinks en HULA Wings.";
$og_name = "HULA Wings&reg;";
$canonical = "https://hulawings.com/drink";

$conexion2 = conexion2('hula_wings', 'root', '');
if (!$conexion2) {
    die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
    header('Location: index');
}

$statement = $conexion2->prepare("SELECT * FROM drinks WHERE id = :id");
$statement->execute(array(':id' => $id));

$drink = $statement->fetch();

if (!$drink) {
    header('Location: /drinks');
}

require 'views/drink.header.php';
require 'views/drink.view.php';
require 'views/footer.php';

?>