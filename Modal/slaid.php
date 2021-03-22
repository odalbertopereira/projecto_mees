<link rel="stylesheet" href="css/vanillaSlideshow.css">
<div id="vanilla-slideshow-container">
    <div id="vanilla-slideshow">
        <?php
        $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
        $estra = mysqli_query($connected, "SELECT SLIDES,ESTADO FROM view_ver_slides WHERE ESTADO='ACTIVO' order by ID_SLIDES DESC");
        while ($linha = mysqli_fetch_assoc($estra)) {
            $slides = $linha['SLIDES'];
            ?>
            <div class="vanilla-slide">
                <img src="./Admin/Ficheiros/Slides/<?php echo $slides; ?>" alt="tiger">
            </div>
        <?php } fechar_conexao_php_mysql($connected); ?>
    </div>
    <div id="vanilla-indicators"></div>
    <div id="vanilla-slideshow-previous">
        <img src="images/arrow-previous.png" alt="slider arrow">
    </div>
    <div id="vanilla-slideshow-next">
        <img src="images/arrow-next.png" alt="slider arrow">
    </div>
</div>
<script src="js/vanillaSlideshow.min.js"></script>
<script>
    vanillaSlideshow.init({
        slideshow: true,
        delay: 5000,
        arrows: true,
        indicators: true,
        random: false,
        animationSpeed: '1s'
    });
</script>
