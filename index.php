<?php

include_once 'admin/config_files/config.php';

$title = $site_title;
$description = "HULA Wings tu spot para pasar el rato con unos buenos tragos." . ' | ' . $site_title;
$og_name = "HULA Wings&reg;";
$og_img = "hula_og_img.jpg";
$canonical = URL;

require 'views/header.php';
require 'views/index.view.php';
require 'views/footer.php';

?>