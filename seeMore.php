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
<div class="page-content">
    <div class="news-details-area ptb-100">
        <div class="container">
            <div class="row">
                <!-- Service Details Left Sidebar Start -->
                <div class="col-lg-8 col-md-12 col-sm-12" style="margin-top: 50px;">
                    <?php
                    $id_noticia = base64_decode($_REQUEST['Codigo']);
                    $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
                    $noticias = mysqli_query($connected, "select ID, TITULO, IMAGEM, TEXTO,DATA_REG,ID_USER from view_ver_noticias where ID= '$id_noticia'");
                    while ($linha = mysqli_fetch_assoc($noticias)) {
                        echo '
                    <div class="service-details-content">
                        <div class="serv-image mb-40">
                            <img src="./Admin/Ficheiros/Noticias/' . $linha['IMAGEM'] . '" alt="service" style="max-width: 770; max-height: 370px;">
                        </div>
                        <div class="blog-content">
                            <h2>' . utf8_encode($linha['TITULO']) . '</h2>
                            <div class="blog-date-categori">
                                <ul>
                                    <li>' . utf8_encode($linha['DATA_REG']) . '</li>
                                    <li>'. obter_pessoa_noticia($linha['ID_USER']). '</li>
                                </ul>
                            </div>
                        </div>
                        <p>' . utf8_encode($linha['TEXTO']) . '</p>
                        <div class="dec-img-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="dec-img">
                                        <img src="img/news-details/1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="dec-img dec-mrg">
                                        <img src="img/news-details/2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-dec-tags-social"></div>
                    </div>
                    <div class="fb-comments" data-href="http://localhost/MEES/?pag=source_hpei_4ZPeXIHsH&Codigo= ' . $id_noticia . '" data-width="700" data-numposts="20"></div>
                    ';
                    } fechar_conexao_php_mysql($connected);
                    ?>
                    <!--<div class="fb-comments" data-href="https://www.facebook.com/educacao.stp/?pag=source_hpei_4ZPeXIHsH&Codigo= ' . $id_noticia . '" data-width="750" data-numposts="5"></div>-->
                </div>
                <!-- Service Details Right Sidebar Start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service-details-right widgets-area">
                        <!-- Single Widget -->
                        <div class="single-widget widget-recent-post">
                            <h4 class="widget-title">Historico de Noticias</h4>
                            <ul class="" style="max-height: 46rem; overflow-y: auto;">
                                <?php
                                $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
                                $noticias = mysqli_query($connected, "select ID, TITULO, IMAGEM, TEXTO,ESTADO,DATA_REG from view_ver_noticias  where ESTADO = 'LIBERADO' ORDER BY DATA_REG DESC");
                                while ($linha = mysqli_fetch_assoc($noticias)) {
                                    $ID = $linha['ID'];
                                    $TITULO = $linha['TITULO'];
                                    $IMAGEM = $linha['IMAGEM'];
                                    $TEXTO = $linha['TEXTO'];
                                    $DATA_REG = $linha['DATA_REG'];
                                    $strcut = substr($linha['TEXTO'], 0, 300);
                                    $texto1 = substr($strcut, 0, strrpos($strcut, ' ')) . '....';
                                    echo '
                                <li>
                                    <a href="?pag=source_hpei_4ZPeXIHsH&Codigo=' . base64_encode($ID) . '" class="widget-recent-post-thumb">
                                        <img src="./Admin/Ficheiros/Noticias/' . $linha['IMAGEM'] . '" alt="footer latest blog" style="width: 100px;height: 100px;">
                                    </a>
                                    <div class="widget-recent-post-content">
                                        <h6><a href="?pag=source_hpei_4ZPeXIHsH&Codigo=' . base64_encode($ID) . '">' . $linha['TITULO'] . '</a></h6>
                                        <div class="widget-recent-post-meta"><span>' . $linha['DATA_REG'] . '</span></div>
                                    </div>
                                </li>';
                                } fechar_conexao_php_mysql($connected);
                                ?>
                            </ul>
                        </div>
                        <!-- Single Widget -->
                        <div class="single-widget widget-social">
                            <h4 class="widget-title">Rede Social</h4>
                            <div class="social-icons social-icons-colorized">
                                <div class = "fb-page" data-href = "https://www.facebook.com/educacao.stp/" data-tabs = "linha do tempo" data-width = "" data-height = "" data- small-header = "false" data-adap-container-width = "true" data-hide-cover = "false" data-show-facepile="true"> <blockquote quote="https://www.facebook.com/educacao.stp/" class = "fb-xfbml-parse-ignore "> <a href ="https://www.facebook.com/educacao.stp/" > Ministério da Educação e Ensino Superior - São Tomé e Príncipe </a> </blockquote> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Details Right Sidebar End -->
            </div>
        </div>
    </div>
</div>

<div id = "fb-root" > </div> 
<script assíncrona adiar crossorigin = "anonymous" src = "https://connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v4.0"></script>