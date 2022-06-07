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
      <a href="https://www.google.com/maps/place/cordoba+viva/@37.8797772,-4.7635877,19.46z/data=!3m1!5s0xd6d207928531c67:0x1116656994cb5c2f!4m13!1m7!3m6!1s0xd6d2078da8ee02b:0x91808ac7a9f2bb12!2sC.+Conquistador+Ordo%C3%B1o+%C3%81lvarez,+14010+C%C3%B3rdoba!3b1!8m2!3d37.8802036!4d-4.7635249!3m4!1s0xd6d2078d3feec4b:0x6850aa2677b617e8!8m2!3d37.8800318!4d-4.7636709">work center</a>
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
