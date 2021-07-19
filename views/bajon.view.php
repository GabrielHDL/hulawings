        <div id="bajon" class="hero">
          <div class="text-hero">
            <h2>No has probado<br>mejores Alitas 😎</h2>
          </div>
          <div class="hero-card">
            <div class="card-body">
              <h3>Cada fin de semana<br>nueva Promo</h3>
              <a href="#"><button class="drinks-btn">¡Quiero!</button></a>
            </div>
          </div>
          <div class="hero-icon">
            <a href="#bajon-shop"><i class="fas fa-chevron-circle-down"></i></a>
          </div>
        </div>
        <section id="bajon-shop" class="shop-body">
            <div class="mw-gen">
              <div class="body-shop">
                <?php
                      foreach($bajones as $bajon){
                ?>
                <div id="bajon-card" class="card-body-drinks">
                  <div class="text-or">
                    <h1><?php echo $bajon['nombre'] ?></h1>
                    <span><?php echo $bajon['cantidad'] ?></span>
                    <span>$<?php echo $bajon['precio'] ?></span>
                  </div>
                  <a href="#"
                    ><img src="bajones/<?php echo $bajon['img'] ?>" alt="<?php echo $bajon['nombre'] ?>"/></a>
                  <a id="btn-mov-link" href="#"><button class="card-drinks-btn">Ver Más</button></a>
                </div>
                <?php
                      }
                ?>
              </div>
            </div>
        </section>