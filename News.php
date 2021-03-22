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
<section class="service-area-actor pt-95 pb-70">
    <div class="container">
        <div class="row">
            <!-- Section Titel -->
            <div class="col-md-12">
                <div class="section-titel-img text-center mb-45">
                    <h2>As Noticias Recentes</h2>
                </div>
            </div>
            <!-- Section Titel -->
        </div>
        <!-- Service Single Item Area Start -->
        <div class="row">
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
            <!-- News Single -->
            <div class="col-lg-4 col-md-6 col-sm-12 moreBox1" style="display: none;">
                <div class="recent-news-single">
                    <div class="news-thumbnail">
                        <a href="?pag=source_hpei_4ZPeXIHsH&Codigo=' . base64_encode($ID) . '"><img src="./Admin/Ficheiros/Noticias/' . $linha['IMAGEM'] . '" alt="" style="width: 370px;height: 250px;"></a>
                    </div>
                    <div class="news-content">
                        <h4><a href="?pag=source_hpei_4ZPeXIHsH&Codigo=' . base64_encode($ID) . '">' . $TITULO . '</a></h4>
                        <div class="news-meta">
                            <span>' . $DATA_REG . '</span>
                            <span>By<a href="#"> Momen</a></span>
                        </div>
                    </div>
                </div>
            </div>
            ';
            } fechar_conexao_php_mysql($connected);
            ?>
            <!-- News Single -->
        </div>
        <div id="loadMore2" style="padding-bottom: 30px;
             padding-top: 30px;
             text-align: center;
             width: 100%;">
            <a href="#" style="background: #042a63;
               border-radius: 3px;
               color: white;
               display: inline-block;
               padding: 10px 30px;
               transition: all 0.25s ease-out;
               -webkit-font-smoothing: antialiased;">Load More</a>
        </div>
    </div>
</section>