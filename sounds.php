<?php

    $music_platform = 'soundcloud'; // soundcloud or youtube

    $ids_soundcloud = [
        '1160419546',
        '1273552501',
        '1278807421',
        '1280005735',
        '1283361829',
        '1284510631',
        '1285919842',
        '143041228',
        '143041228',
        '168419155',
        '181443158',
        '188289230',
        '261483992',
        '340072602',
        '341726585',
        '341761439',
        '345676513',
        '353439659',
        '40255829',
        '97287230',
        '98328980',
    ];

    $selected_soundcloud = $ids_soundcloud[\array_rand($ids_soundcloud)];

    $ids_youtube = [
        '1V_xRb0x9aw', // Gorillaz - Clint Eastwood (Official Video)
        '4bZ1wSjfBr4', // Alejandro Sanz - Yo No Quiero Suerte
        '4m1EFMoRFvY', // Beyoncé - Single Ladies (Put a Ring on It) (Video Version)
        '_NksGaZJQRI', // The Heat (The Energy)
        'bESGLojNYSo', // Lady Gaga - Poker Face (Official Music Video)
        'BUxJNJA4dDI', // Metallica - Devil's Dance
        'CD-E-LDc384', // Metallica - Enter Sandmand
        'FMrIy9zm7QY', // Fatboy Slim - Rockafeller Skank [Official Video]
        'GLSr0BAlndM', // Diesel Power
        'GVV06jTYjeY', // The Prodigy - Wild Frontier (Official Video)
        'HKNz0DWQXZw', // Dani Fernández - Dile a los demás (Videoclip Oficial)
        'HuZTEsvgQko', // The Prodigy - Climbatize
        'jbMt47Ovvtc', // Boris Brejcha Legendary Megamix 1/The best of Boris Brejcha
        'l482T0yNkeo', // AC/DC - Highway to Hell (Official Video)
        'lWA2pjMjpBs', // Rihanna - Diamonds
        'mr8GBzTsWqM', // Indian Flute Meditation Music || Pure Positive Vibes || Instrumental Music for Meditation and Yoga
        'qmsbP13xu6k', // Mr Oizo - Flat beat (Official Video with Flat Eric - 1999 - F Communications)
        'rdccTOcX7o4', // Madonna - Sorry (Official Video)
        'tpKCqp9CALQ', // The Chemical Brothers - Hey Boy Hey Girl (Official Music Video)
        'ub747pprmJ8', // Fatboy Slim - Right Here, Right Now [Official Video]
        'Uql3mAPuxdg', // PRODIGY - RUN WITH THE WOLVES
        'v2AC41dglnM', // AC/DC - Thunderstruck (Official Video)
        'WddpRmmAYkg', // Boris Brejcha Style @ Art of Minimal Techno Cartoon Tripping - The Mad Doctor by RTTWLR
        'xat1GVnl8-k', // Bloodhound Gang - The Bad Touch (Official Video)
        'xecukJDAPcw', // Música para Activar la Glándula Pineal - Tercer Ojo Abierto - Activación del Tercer Ojo
        'ymNFyxvIdaM', // Bomfunk MC's - Freestyler (Video Original Version)
        'Ywq6FMLbWH4', // Hippie Sabotage - Devil Eyes
    ];

    $selected_youtube = $ids_youtube[\array_rand($ids_youtube)];

?>

    <?php if ($music_platform === 'soundcloud') : ?>

        <div class="soundcloud" style="position: fixed; bottom: 0;">
            <iframe height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?= $selected_soundcloud ?>&color=0066cc&amp;auto_play=true&amp;show_artwork=true"></iframe>
        </div>

    <?php endif ?>

    <?php if ($music_platform === 'youtube') : ?>

        <div data-video="<?= $selected_youtube ?>" data-autoplay="1" data-loop="1" id="youtube-audio"></div>
        <script src="https://www.youtube.com/iframe_api"></script>
        <script src="https://cdn.rawgit.com/labnol/files/master/yt.js"></script> 

    <?php endif ?>
