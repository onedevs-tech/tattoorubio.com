<html>
   <head>
      <title>tattoo_RUBIO</title>
      <meta charset="UTF-8" />
      <link rel="icon" href="../images/fire.png" type="image/x-icon" />
      <link rel="stylesheet" href="../css/styles.css?v=1.0">
   </head>
   <body style="">
      <?php include '../contact-data.php'; ?>
      <?php include '../hashtags.php'; ?>
      <?php
         $ids_youtube_videos = [
            'CD-E-LDc384', // Metallica - Enter Sandmand
            'RijB8wnJCN0', // Cypress Hill - Insane In The Brain
            'arnxOY9T_eI', // BIG EGG - The Prodigy feat Sheila Chandra Smack My Bitch Up
            'WddpRmmAYkg', // Boris Brejcha Style @ Art of Minimal Techno Cartoon Tripping - The Mad Doctor by RTTWLR
            'w3qqN1BMnhk', // Delinquent Habits - Tres Delinquentes (Official Video)
            'W3q8Od5qJio', // Rammstein - Du Hast (Official Video)
            'xLrW4IcPiWw', // Control Machete - ¿Comprendes, Mendes?
            'nAOBrA6ciyU', // Cypress Hill - Siempre Peligroso (Official Audio) ft. Fermin IV Caballero
            'LXyJdUAuWFU', // SFDK - Una De Piratas (con La Mala Rodriguez)
            'BUxJNJA4dDI', // Metallica - Devil's Dance
            'voBNpdXkLnU', // The Prodigy - Warrior's Dance Uncut (Official Video)
            'GVV06jTYjeY', // The Prodigy - Wild Frontier (Official Video)
            '0usfxEYijXY', // La Leyenda Del Tiempo (Jaleos)
            '1LO0ac6ynGs', // Soy Gitano
            'q7p-ihYOG5s', // Cypress Hill - I Ain't Goin' Out Like That (Official Video)
            'x2rQzv8OWEY', // Rammstein - Engel (Official Video)
            'TZ827lkktYs', // Aphex Twin - Come To Daddy (Director's Cut)
            'Ypkv0HeUvTc', // Marilyn Manson - The Beautiful People (Official Video)
            'v2AC41dglnM', // AC/DC - Thunderstruck (Official Video)
            'l482T0yNkeo', // AC/DC - Highway to Hell (Official Video)
            'mr8GBzTsWqM', // Indian Flute Meditation Music || Pure Positive Vibes || Instrumental Music for Meditation and Yoga
            'xecukJDAPcw', // Música para Activar la Glándula Pineal - Tercer Ojo Abierto - Activación del Tercer Ojo
            'Uql3mAPuxdg', // PRODIGY - RUN WITH THE WOLVES
         ];
         $youtube_video = $ids_youtube_videos[\array_rand($ids_youtube_videos)];
      ?>
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?= $youtube_video ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </body>
</html>
