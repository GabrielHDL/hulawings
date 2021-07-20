<?php

include_once 'admin/config_files/config.php';

$title = $site_title;
$description = "HULA Wings tu spot para pasar el rato con unos buenos tragos 😎";
$og_name = "HULA Wings&reg;";
$og_img = "hula_og_img.jpg";
$canonical = "https://hulawings.com";

require 'views/header.php';
require 'views/index.view.php';
require 'views/footer.php';

?>