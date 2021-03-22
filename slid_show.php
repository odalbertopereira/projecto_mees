<div class="galleryContainer" style=" margin-bottom: -70px;">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <?php
        $connected = mysqli_connect('localhost', 'root', '', 'id13375646_video_aula');
        $estra = mysqli_query($connected, "SELECT fotos,Estado FROM tb_slides WHERE Estado='ACTIVO' order by slide_id DESC");
        while ($linha = mysqli_fetch_assoc($estra)) {
            $slides = $linha['fotos'];
            ?>
            <div class="imageHolder">
                <img src="./AdminMEES/Ficheiros/Slides/<?php echo $slides; ?>">1366X768
                <p class="captionText"></p>
            </div>
        <?php } fechar_conexao_php_mysql($connected); ?>
        <div id="dotsContainer"></div>
    </div>
</div>
<div class="home-intro" id="home-intro">
    <div class="container">

        <div class="row">
            <div class="col-md-12 center">
                <p class="center">
                    Bem-Vindo ao <em>Ministério da Educação e Ensino Superior</em></p>
                <p> <h4 style="color: #cccccc"> da República Democrática de São Tomé e Príncipe </h4>
                <p style="text-shadow: 0.1em 0.1em 0.15em #808080; font-size: 30px;">Juntos por um Ensino de Qualidade para Todos!</p>
                </p>
            </div>
        </div>
    </div>
</div>