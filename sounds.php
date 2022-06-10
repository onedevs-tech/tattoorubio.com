        
<?php
    $ids_youtube_videos = [
    'xecukJDAPcw', // Música para Activar la Glándula Pineal - Tercer Ojo Abierto - Activación del Tercer Ojo
    '4bZ1wSjfBr4', // Alejandro Sanz - Yo No Quiero Suerte
    'HKNz0DWQXZw', // Dani Fernández - Dile a los demás (Videoclip Oficial)
    'CD-E-LDc384', // Metallica - Enter Sandmand
    'WddpRmmAYkg', // Boris Brejcha Style @ Art of Minimal Techno Cartoon Tripping - The Mad Doctor by RTTWLR
    'BUxJNJA4dDI', // Metallica - Devil's Dance
    'GVV06jTYjeY', // The Prodigy - Wild Frontier (Official Video)
    'v2AC41dglnM', // AC/DC - Thunderstruck (Official Video)
    'l482T0yNkeo', // AC/DC - Highway to Hell (Official Video)
    'mr8GBzTsWqM', // Indian Flute Meditation Music || Pure Positive Vibes || Instrumental Music for Meditation and Yoga
    'Uql3mAPuxdg', // PRODIGY - RUN WITH THE WOLVES
    'xat1GVnl8-k', // Bloodhound Gang - The Bad Touch (Official Video)
    'ymNFyxvIdaM', // Bomfunk MC's - Freestyler (Video Original Version)
    'bESGLojNYSo', // Lady Gaga - Poker Face (Official Music Video)
    'rdccTOcX7o4', // Madonna - Sorry (Official Video)
    'lWA2pjMjpBs', // Rihanna - Diamonds
    '4m1EFMoRFvY', // Beyoncé - Single Ladies (Put a Ring on It) (Video Version)
    'FMrIy9zm7QY', // Fatboy Slim - Rockafeller Skank [Official Video]
    'ub747pprmJ8', // Fatboy Slim - Right Here, Right Now [Official Video]
    'qmsbP13xu6k', // Mr Oizo - Flat beat (Official Video with Flat Eric - 1999 - F Communications)
    'tpKCqp9CALQ', // The Chemical Brothers - Hey Boy Hey Girl (Official Music Video)
    'HuZTEsvgQko', // The Prodigy - Climbatize
    'GLSr0BAlndM', // Diesel Power
    '1V_xRb0x9aw', // Gorillaz - Clint Eastwood (Official Video)
    '_NksGaZJQRI', // The Heat (The Energy)
    'jbMt47Ovvtc', // Boris Brejcha Legendary Megamix 1/The best of Boris Brejcha
    ];
    $youtube_video = $ids_youtube_videos[\array_rand($ids_youtube_videos)];
?>

    <div data-video="<?= $youtube_video ?>" data-autoplay="1" data-loop="1" id="youtube-audio"></div>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="https://cdn.rawgit.com/labnol/files/master/yt.js"></script> 