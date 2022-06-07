<html>
   <head>
      <title>tattoo_RUBIO</title>
      <meta charset="UTF-8" />
      <link rel="icon" type="image/png" sizes="16x16"  href="../favicons/favicon-16x16.png">
      <link rel="icon" type="image/png" sizes="32x32"  href="../favicons/favicon-32x32.png">
      <link rel="apple-touch-icon" sizes="57x57" href="../favicons/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="../favicons/apple-touch-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="../favicons/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="../favicons/apple-touch-icon-76x76.png">
      <link rel="icon" type="image/png" sizes="96x96"  href="../favicons/apple-touch-icon-96x96.png">
      <link rel="apple-touch-icon" sizes="114x114" href="../favicons/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="../favicons/apple-touch-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="../favicons/apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="../favicons/apple-touch-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="../favicons/android-icon-192x192.png">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/styles.css?v=1.0">
   </head>
   <body style="background-color: black;">
      <?php include '../menu-and-contact-data.php'; ?>
      <?php include '../hashtags.php'; ?>
      <?php
         $ids_youtube_videos = [
            'CD-E-LDc384', // Metallica - Enter Sandmand
            'RijB8wnJCN0', // Cypress Hill - Insane In The Brain
            'arnxOY9T_eI', // BIG EGG - The Prodigy feat Sheila Chandra Smack My Bitch Up
            'WddpRmmAYkg', // Boris Brejcha Style @ Art of Minimal Techno Cartoon Tripping - The Mad Doctor by RTTWLR
         // 'w3qqN1BMnhk', // Delinquent Habits - Tres Delinquentes (Official Video)
            'W3q8Od5qJio', // Rammstein - Du Hast (Official Video)
         // 'xLrW4IcPiWw', // Control Machete - ¿Comprendes, Mendes?
         // 'nAOBrA6ciyU', // Cypress Hill - Siempre Peligroso (Official Audio) ft. Fermin IV Caballero
            'LXyJdUAuWFU', // SFDK - Una De Piratas (con La Mala Rodriguez)
            'BUxJNJA4dDI', // Metallica - Devil's Dance
         // 'voBNpdXkLnU', // The Prodigy - Warrior's Dance Uncut (Official Video)
            'GVV06jTYjeY', // The Prodigy - Wild Frontier (Official Video)
            '0usfxEYijXY', // La Leyenda Del Tiempo (Jaleos)
            '1LO0ac6ynGs', // Soy Gitano
         // 'q7p-ihYOG5s', // Cypress Hill - I Ain't Goin' Out Like That (Official Video)
         // 'x2rQzv8OWEY', // Rammstein - Engel (Official Video)
            'TZ827lkktYs', // Aphex Twin - Come To Daddy (Director's Cut)
            'Ypkv0HeUvTc', // Marilyn Manson - The Beautiful People (Official Video)
            'v2AC41dglnM', // AC/DC - Thunderstruck (Official Video)
            'l482T0yNkeo', // AC/DC - Highway to Hell (Official Video)
            'mr8GBzTsWqM', // Indian Flute Meditation Music || Pure Positive Vibes || Instrumental Music for Meditation and Yoga
            'xecukJDAPcw', // Música para Activar la Glándula Pineal - Tercer Ojo Abierto - Activación del Tercer Ojo
            'Uql3mAPuxdg', // PRODIGY - RUN WITH THE WOLVES
            '4bZ1wSjfBr4', // Alejandro Sanz - Yo No Quiero Suerte
            'rog8ou-ZepE', // Vanilla Ice - Ice Ice Baby (Official Music Video)
            'rcjVjqTARKA', // Cool as Ice - Everybody Get Loose - HD rip
            'otCpCn0l4Wo', // M.C. Hammer - U Can't Touch This
            'HFCv86Olk8E', // MC Hammer - 2 Legit 2 Quit (Official Video)
            '9EcjWd-O4jI', // Technotronic - Pump Up The Jam (Official Music Video)
         // 'XhzpxjuwZy0', // House of Pain - Jump Around (Official Music Video)
            'HKNz0DWQXZw', // Dani Fernández - Dile a los demás (Videoclip Oficial)
            
         ];
         $youtube_video = $ids_youtube_videos[\array_rand($ids_youtube_videos)];
      ?>
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?= $youtube_video ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <script src="../js/main.js"></script>
      </body>
</html>
