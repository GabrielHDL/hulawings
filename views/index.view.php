    <div class="sound-float">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player id="sound_equalizer" src="assets/sound.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
    <div id="inicio" class="hero">
      <div class="text-hero">
        <h2>Sabado de<br />3X100 🍹</h2>
      </div>
      <div class="hero-card">
        <div class="card-body">
          <h3>Nuestra carta completa<br />de Drinks</h3>
          <a href="drinks"><button class="drinks-btn">Ver Más</button></a>
        </div>
      </div>
      <div class="hero-icon">
        <a href="#mojito"><i class="fas fa-chevron-circle-down"></i></a>
      </div>
    </div>
    <section class="contenedor-drinks" id="mojito">
      <h1 class="ribbon">Especialidad</h1>
      <h1 class="ribbon-h">de la casa</h1>
      <div class="mw direction">
        <a href="#"><button class="drinks-btn res">Ver Más</button></a>
        <div class="imagen">
          <img src="bebidas/mojito.png" alt="Mojito" title="Mojito" />
        </div>
        <div class="contenedor-texto">
          <h3>Mojito</h3>
          <p>El cubano favorito.</p>
          <a href="#"><button class="drinks-btn res-desk">Ver Más</button></a>
        </div>
      </div>
    </section>
    <section class="contenedor-drinks" id="pina-colada">
      <h1 class="ribbon-r">Puro sabor</h1>
      <h1 class="ribbon-h-r">Caribeño</h1>
      <div class="mw direction-reverse">
        <a href="#"><button class="drinks-btn res">Ver Más</button></a>
        <div class="imagen">
          <img src="bebidas/pngegg.png" alt="Piña Colada" title="Piña Colada" />
        </div>
        <div class="contenedor-texto">
          <h3>Piña Colada</h3>
          <p>La relación más trend entre la piña y el coco.</p>
          <a href="#"><button class="drinks-btn res-desk">Ver Más</button></a>
        </div>
      </div>
    </section>
    <section class="contenedor-drinks" id="shots">
      <h1 class="ribbon">Una entrada</h1>
      <h1 class="ribbon-h">Diferente</h1>
      <div class="mw direction">
        <a href="#"><button class="drinks-btn res">Ver Más</button></a>
        <div class="imagen">
          <img src="bebidas/flame_shots.svg" alt="Shots" title="Shots" />
        </div>
        <div class="contenedor-texto">
          <h3>Shots</h3>
          <p>Una exquisita variedad de shots.</p>
          <a href="#"><button class="drinks-btn res-desk">Ver Más</button></a>
        </div>
      </div>
    </section>
    <script>
      const playSound = function() {
      let element = document.createElement('div');
      element.setAttribute('style', 'display: none');
      element.innerHTML = `
        <audio autoplay loop>
          <source src="miscelaneous/audio/liqwyd-birthday.mp3" type="audio/mpeg">
        </audio>
      `;
      document.body.appendChild(element);
      document.removeEventListener('click', playSound);
      }

      document.addEventListener('click', playSound);
    </script>
