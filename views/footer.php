        <footer class="footer">
            <div class="mw wrap direction-footer">
                <div class="logo-container-footer">
                    <img src="<?php echo URL ?>img/logo_footer.svg" alt="">
                </div>
                <div class="links-footer">
                    <ul>
                        <li><a href="<?php echo URL ?>">Inicio</a></li>
                        <li><a href="<?php echo URL ?>drinks/">Drinks</a></li>
                        <li><a href="<?php echo URL ?>snacks/">Snacks</a></li>
                        <li><a href="<?php echo URL ?>donde">¿Dónde?</a></li>
                    </ul>
                </div>
                <div class="redes-footer">
                    <h4>Siguenos en<br />nuestras redes:</h4>
                    <div class="social-icons">
                        <a target="_blank" id="fb" href="<?php echo $fb ?>"><i class="fab fa-facebook"></i></a>
                        <a target="_blank" id="ig" href="<?php echo $ig ?>"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="copy">
                    <p>HULA Wings<sup>&reg;</sup> &copy;<?php $time = time(); echo date("Y", $time); ?> | Todos los derechos reservados | Made by <a target="_blank" href="https://houdle.com">Houdle<sup>&reg;</sup></a> with <i class="fas fa-heart heart"></i>.</p>
                </div>
            </div>
        </footer>
        <audio loop id="myAudio" title="HULA Wings&reg;" src="<?php echo URL ?>miscelaneous/audio/liqwyd-birthday.mp3" preload="auto"></audio>
    <script src="<?php echo URL ?>js/scripts.min.js"></script>
    <script src="<?php echo URL ?>js/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '385619182950757',
      cookie     : true,
      xfbml      : true,
      version    : 'v11.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '4136297809800596');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=4136297809800596&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    </body>
</html>