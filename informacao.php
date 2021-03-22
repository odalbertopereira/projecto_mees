<style>
    #slider-container{
        display: none;
    }
</style>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li class="active">Publicações</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Noticias</h1>
            </div>
        </div>
    </div>
</section>
<div class="row ">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 30px;">

                <?php
                $id_noticia = base64_decode($_REQUEST['Codigo']);
                $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
                $noticias = mysqli_query($connected, "select ID, TITULO, IMAGEM, TEXTO,DATA_REG from view_ver_noticias where ID= '$id_noticia'");
                while ($linha = mysqli_fetch_assoc($noticias)) {
                    echo '
                <br>
                <img class="img-responsive" src="./Admin/Ficheiros/Noticias/' . $linha['IMAGEM'] . '" style="max-width: 770; max-height: 370px;">
                <br>
                <div class="blog-content">
                    <h2><strong>' . utf8_encode($linha['TITULO']) . '</strong></h2>
                    <div class="blog-date-categori">
                        <ul>
                            <li>' . utf8_encode($linha['DATA_REG']) . '</li>
                            <li>Admin</li>
                        </ul>
                    </div>
                </div>
                <article>
                    <p>' . utf8_encode($linha['TEXTO']) . '</p>
                </article>
                <div class="col-md-12">
                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="http://ustp.st/mj/tese/" data-width="700" data-numposts="8" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1844189112571148&amp;container_width=693&amp;height=100&amp;href=http%3A%2F%2Fustp.st%2Fmj%2Ftese%2F&amp;locale=pt_PT&amp;numposts=8&amp;sdk=joey&amp;version=v2.9&amp;width=700"><span style="vertical-align: bottom; width: 700px; height: 189px;">
                            <iframe name="f1882f2480764cc" width="700px" height="100px" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.9/plugins/comments.php?app_id=1844189112571148&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df1f4cafcb7d9b9%26domain%3Dwww.justica.gov.st%26origin%3Dhttp%253A%252F%252Fwww.justica.gov.st%252Ff2b75c7c7c81f7c%26relation%3Dparent.parent&amp;container_width=693&amp;height=100&amp;href=http%3A%2F%2Fustp.st%2Fmj%2Ftese%2F&amp;locale=pt_PT&amp;numposts=8&amp;sdk=joey&amp;version=v2.9&amp;width=700" style="border: none; visibility: visible; width: 700px; height: 189px;" class="">

                            </iframe>
                        </span>
                    </div>
                </div>
            </div>
                ';
                } fechar_conexao_php_mysql($connected);
                ?>

            </div>
            <div class="single-widget widget-recent-post col-md-4">
                <br>
                <h4 class="pull-right" style="margin: 3rem; font-size: 2rem">Multimédia</h4>
                <br><br>
                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/educacao.stp" data-tabs="timeline" data-height="220" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1844189112571148&amp;container_width=347&amp;height=220&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmjapap.stp%2F&amp;locale=pt_PT&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"><span style="vertical-align: bottom; width: 340px; height: 220px;"><iframe name="f92c9d35f18318" width="1000px" height="220px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.9/plugins/page.php?adapt_container_width=true&amp;app_id=1844189112571148&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Dfb56a71931f2f4%26domain%3Dwww.justica.gov.st%26origin%3Dhttp%253A%252F%252Fwww.justica.gov.st%252Ff2b75c7c7c81f7c%26relation%3Dparent.parent&amp;container_width=347&amp;height=220&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmjapap.stp%2F&amp;locale=pt_PT&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" style="border: none; visibility: visible; width: 340px; height: 220px;" class=""></iframe></span></div>
                <br><br>
                <div class="col-md-12 areaMultimedia" style="max-height: 46rem; overflow-y: auto;">
                    <div class="col-md-12 col-xs-6 section" id="0">
                        <img class="col-md-12 col-xs-6" src="img/latest-trailer/left-1.jpg" alt="" >
                        <a href="https://www.youtube.com/watch?v=1q_YYM5vnGw" class="popup-youtube">
                            <img src="img/play-arrow.png" alt="">
                            <i class=""></i>
                        </a>
                    </div>
                    <div class="col-md-12 col-xs-6 section" id="0">
                        <img class="col-md-12 col-xs-6" src="img/latest-trailer/left-5.jpg" alt="" >
                        <a href="https://www.youtube.com/watch?v=1q_YYM5vnGw" class="popup-youtube">
                            <img src="img/play-arrow.png" alt="">
                            <i class=""></i>
                        </a>
                    </div>
                    <div class="col-md-12 col-xs-6 section" id="0">
                        <img class="col-md-12 col-xs-6" src="img/latest-trailer/left-3.jpg" alt="" >
                        <a href="https://www.youtube.com/watch?v=1q_YYM5vnGw" class="popup-youtube">
                            <img src="img/play-arrow.png" alt="">
                            <i class=""></i>
                        </a>
                    </div>
                    <div class="col-md-12 col-xs-6 section" id="0">
                        <img class="col-md-12 col-xs-6" src="img/latest-trailer/left-2.jpg" alt="" >
                        <a href="https://www.youtube.com/watch?v=1q_YYM5vnGw" class="popup-youtube">
                            <img src="img/play-arrow.png" alt="">
                            <i class=""></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /Menu Area -->
</body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.9&appId=1844189112571148";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.9&appId=1844189112571148";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
