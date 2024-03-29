<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-MW6SMNN');
    </script>
    <!-- End Google Tag Manager -->
    <link rel="canonical" href="<?php echo $canonical .'/' . $snack['id'] ?>" />
    <meta name="facebook-domain-verification" content="jeqxej67qhkuwcp2o7zfvy3qc04686" />
    <meta property="og:title" content="<?php echo $snack['nombre'] . ' | ' . $title ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $snack['descripcion'] . ' | ' . $description ?>" />
    <meta property="og:url" content="<?php echo URL ?>" />
    <meta property="og:site_name" content="<?php echo $og_name ?>" />
    <meta property="og:image" content="<?php echo URL ?>bajones/<?php echo $snack['img'] ?>" />
    <meta propety="og:image:alt" content="HULA Wings Open Graph Image" />
    <meta property="og:locale" content="es_MX">
    <meta property="fb:app_id" content="385619182950757">
    <meta name="twitter:title" content="<?php echo $snack['nombre'] . ' | ' . $title ?>">
    <meta name="twitter:description" content="<?php echo $snack['descripcion'] . ' | ' . $description ?>">
    <meta name="twitter:image" content="<?php echo URL ?>bajones/<?php echo $snack['img'] ?>">
    <meta name="twitter:site" content="@HulaWings">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@HulaWings">
    <meta name="description" content="<?php echo $snack['descripcion'] . ' | ' . $description ?>">
    <link rel="stylesheet" href="<?php echo URL ?>css/styles.min.css" />
    <link rel="stylesheet" href="<?php echo URL ?>css/queries.min.css" />
    <link rel="shortcut icon" href="<?php echo URL ?>assets/favicon.png" />
    <script src="https://kit.fontawesome.com/bf31e6c9ae.js" crossorigin="anonymous"></script>
    <title><?php echo $snack['nombre'] . ' | ' . $title ?></title>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MW6SMNN"
        height="0" width="0" style="display:none;visibility:hidden">
      </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="progressbar"></div>
    <div id="scrollpath"></div>
    <header>
      <nav>
        <div class="mw">
          <div class="logo-container">
            <a id="logo" href="/"><img class="logo" src="<?php echo URL ?>img/logo_hula.svg" alt="Logo Hula" title="Hula Wings" /></a>
          </div>
            <ul class="menu-desk">
              <li class="menu-i"><a href="<?php echo URL ?>">Inicio</a></li>
              <li class="menu-i"><a href="<?php echo URL ?>drinks/">Drinks</a></li>
              <li class="menu-i"><a href="<?php echo URL ?>snacks/">Snacks</a></li>
              <li class="menu-i"><a href="<?php echo URL ?>donde">¿Dónde?</a></li>
            </ul>
          <div class="phone-menu">
            <svg class="burger" xmlns="http://www.w3.org/2000/svg" width="33.712" height="19.618" viewBox="0 0 33.712 19.618">
              <g id="Componente_27_9" data-name="Componente 27 – 9" transform="translate(1 1)">
                <line id="Línea_86" data-name="Línea 86" class="cls-1" x2="31.712"/>
                <line id="Línea_87" data-name="Línea 87" class="cls-1" x2="31.712" transform="translate(0 8.809)"/>
                <line id="Línea_88" data-name="Línea 88" class="cls-1" x2="31.712" transform="translate(0 17.618)"/>
              </g>
            </svg>
          </div>
        </div>
      </nav>
    </header>