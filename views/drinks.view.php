  <section class="hero-drinks">
    <div class="text-drinks">
      <h2>Mojito</h2>
      <p>La especialidad de la casa.</p>
    </div>
    <div class="drinks-story">
      <p>
        El preferido por los piratas para evitar el escorbuto llega a ti con la
        mezcla perfecta de limon, azucar y la frescura de la hierbabuena, sabemos
        que necesitas uno Arrgh!
      </p>
      <div class="button-hero">
        <a href="#"><button class="drinks-btn">Ver Más</button></a>
      </div>
    </div>
    <div class="lottie-down">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player id="scroll_down" src="assets/scroll_down.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
  </section>
  <section id="drinks-shop" class="shop-body">
    <div class="mw-gen">
      <div class="body-shop">
        <?php
              foreach($drinks as $drink){
              ?>
        <div id="drinks-card" class="card-body-drinks">
          <div class="text-or">
            <h1><?php echo $drink['nombre'] ?></h1>
            <span><?php echo $drink['desc_corta'] ?></span>
          </div>
          <a href="#"
            ><img src="bebidas/<?php echo $drink['img'] ?>" alt="<?php echo $drink['nombre'] ?>"/></a>
          <a id="btn-mov-link" href="#"><button class="card-drinks-btn">Ver Más</button></a>
        </div>
        <?php
              }
              ?>
      </div>
    </div>
  </section>
