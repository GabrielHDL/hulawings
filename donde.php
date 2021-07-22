<?php

include_once 'admin/config_files/config.php';

$title = "$donde_title | $site_title";
$description = "Aquí puedes encontrarnos 😉";
$og_name = "HULA Wings&reg;";
$og_img = "hula_donde_og_img.jpg";
$canonical = "https://hulawings.com/donde";

require 'views/header.php';
require 'views/donde.view.php';
require 'views/footer.php';

?>