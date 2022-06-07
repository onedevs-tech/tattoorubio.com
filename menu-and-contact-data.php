<div class="contact-data">
   <div class="logo">
      <a href="/">
         <img src="/images/ojo-de-horus.png" alt="logo">
         <div>
            <span class="a-tattoo-rubio">tattoo_RUBIO</span>
         </div>
      </a>
   </div>
   <div class="tribal">
      <img src="/images/tribal2.png" alt="tribal" class="imgtribal t1">
      <img src="/images/tribal2.png" alt="tribal" class="imgtribal t2">
      <img src="/images/tribal2.png" alt="tribal" class="imgtribal t3">
   </div>
   <div class="menu">
      <a href="/bio/">bio</a> 
      <a href="/works/">works</a> 
      <a href="/friends/">friends</a> 
      <a href="/partners/">partners</a> 
      <a href="https://www.google.com/maps/place/Tattoo+Rubio/@37.8796277,-4.7641025,15z/data=!4m5!3m4!1s0x0:0x2f00d03d2594bb24!8m2!3d37.8796277!4d-4.7641025">work center</a>
      <a href="/playlists/">🎧</a> 
      <a href="/red-serpent/">❤️</a>
      <div class="contact-item">
         <div class="flags">
            <?php

               //
               // random flag order
               //

               $flags = [
                  'france-flag.jpg',
                  'germany-flag.png',
                  'italy-flag.png',
                  'russia-flag.png',
                  'spain-flag.png',
                  'uk-flag.png',
                  'portugal-flag.png',
                  'ukrania-flag.png',
                  'usa-flag.png',
               ];
               \shuffle($flags);
               foreach ($flags as $flag) {
                  echo '<img src="/images/' . $flag . '" height="12" align="absmiddle" /> ';
               }
            ?>
         </div>
         <a href="mailto:tattoorubioake@gmail.com">tattoorubioake@gmail.com</a>
         <a href="tel:+34643562490">+34 643 562 490</a> 
      </div>
      <span>†</span>
   </div>
   <div class="icon-responsive">
      <span></span>
   </div>
</div>
