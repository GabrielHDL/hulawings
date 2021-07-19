 <style>
     .hero-donde {
         background: #EC0868;
         height: 100vh;
         width: 100%;
         position: relative;
         z-index: 2;
         box-shadow: 0 0 15px rgba(255,255,255,0.5);
         display: flex;
         justify-content: center;
         align-items: center;
         padding: 20px;
         box-shadow: 0 0 15px #EC0868;
     }

     .text-donde {
         height: 100%;
         width: 50%;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: flex-start;
     }

     .text-donde h2 {
         font-family: Poppins, sans-serif;
         font-size: 8vw;
         font-weight: 700;
         color: #F7E733;
     }

     .lottie-location {
         display: flex;
         justify-content: center;
         align-items: center;
         width: 50%;
         height: 100%;
     }

     #location {
         width: 85%;
         height: auto;
         margin-bottom: 12%;
     }

     .find-us {
        width: 100%;
        height: 100vh;
        background: #FFF;
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
        box-shadow: 0 0 15px #EC0868;
     }

     .find-us-text {
         width: 50%;
         height: 100%;
         display: flex;
         justify-content: center;
         align-items: flex-start;
         flex-direction: column;
     }

     .find-us-text h3 {
         font-family: Poppins, sans-serif;
         font-size: 250%;
     }

     .find-us-text p {
        font-family: Raleway, sans-serif;
        font-size: 100%;
        font-weight: 500;
     }

     .find-us-map {
         display: flex;
         justify-content: center;
         align-items: center;
         width:50%;
         height: 100%;
     }
     @media only screen and (max-width: 768px) {
         .hero-donde {
             flex-direction: column;
         }
         .text-donde {
             align-items: center;
         }

         .text-donde h2 {
             font-size: 17vw;
         }

         #location {
             width: auto;
             height: 100%;
             margin-bottom: 0;
         }
         .us-res {
             flex-direction: column;
         }

         .find-us-text {
             text-align: center;
             padding: 10px;
             width: 100%;
             align-items: center;
         }

         .find-us-text h3 {
             font-size: 6vw;
         }

         .find-us-map {
             width: 100%;
         }
     }
 </style>
 
 <div class="hero-donde">
     <h1 class="ribbon-r">Aquí Puedes</h1>
     <h1 class="ribbon-h-r">Encontrarnos</h1>
     <div class="text-donde">
        <h2>Tssss...</h2>
        <h2>Oye!</h2>
     </div>
     <div class="lottie-location">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player id="location" src="assets/location.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
 </div>
 <section class="find-us">
     <div class="mw-gen us-res">
        <div class="find-us-text">
            <h3>Dirección:</h3>
            <p>Ignacio Zaragoza 8, Ejidal Emiliano Zapata, 55020 Ecatepec de Morelos, Méx.</p>
        </div>
        <div class="find-us-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.435722603738!2d-99.06140398461103!3d19.6086611401073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f1767a456825%3A0x7b8dda2cc1e194fe!2sIgnacio%20Zaragoza%209%2C%20Ejidal%20Emiliano%20Zapata%2C%2055020%20Ecatepec%20de%20Morelos%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1626717895893!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
     </div>
 </section>