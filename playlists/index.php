<html>
   <head>
      <?php include '../head.php'; ?>
   </head>
   <body style="background-color: black;">
      <?php include '../menu-and-contact-data.php'; ?>
      <?php include '../hashtags.php'; ?>
      <?php
         $ids_youtube_videos = [
            'xecukJDAPcw', // Música para Activar la Glándula Pineal - Tercer Ojo Abierto - Activación del Tercer Ojo
            '4bZ1wSjfBr4', // Alejandro Sanz - Yo No Quiero Suerte
            'HKNz0DWQXZw', // Dani Fernández - Dile a los demás (Videoclip Oficial)
            'CD-E-LDc384', // Metallica - Enter Sandmand
            'WddpRmmAYkg', // Boris Brejcha Style @ Art of Minimal Techno Cartoon Tripping - The Mad Doctor by RTTWLR
            'BUxJNJA4dDI', // Metallica - Devil's Dance
            'GVV06jTYjeY', // The Prodigy - Wild Frontier (Official Video)
            'TZ827lkktYs', // Aphex Twin - Come To Daddy (Director's Cut)
            'v2AC41dglnM', // AC/DC - Thunderstruck (Official Video)
            'l482T0yNkeo', // AC/DC - Highway to Hell (Official Video)
            'mr8GBzTsWqM', // Indian Flute Meditation Music || Pure Positive Vibes || Instrumental Music for Meditation and Yoga
            'Uql3mAPuxdg', // PRODIGY - RUN WITH THE WOLVES
         ];
         $youtube_video = $ids_youtube_videos[\array_rand($ids_youtube_videos)];
      ?>
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?= $youtube_video ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <script src="../js/main.js"></script>
      </body>
</html>
