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
                    <li class="active">Noticias</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Multimedia</h1>
            </div>
        </div>
    </div>
</section>
<div class="interior container clearfix">
    <div class="row"> 
        <?php
        $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
        $stp1 = mysqli_query($connected, "select ID_V, LEGEND_V, LINK_V,ESTADO,IMG_VIDEO, DATA_REG from view_ver_videos WHERE ESTADO = 'ACTIVO' ORDER BY DATA_REG DESC LIMIT 1");
        while ($linha1 = mysqli_fetch_assoc($stp1)) {
            echo '
        <div class="col-xs-12 col-sm-6 col-md-12 blogBox">
            <div class="item featured">
                <div class="">
                    <img src="./Admin/Ficheiros/Multimedia/' . $linha1['IMG_VIDEO'] . '" alt="">
                    <a class="popup-youtube" href="' . $linha1['LINK_V'] . '">
                        <i class="fa fa-play-circle"></i>
                    </a>
                </div>             
                <div class="col-md-6 blogTxt">
                    <div class="blogCategory">
                        <i>' . $linha1['DATA_REG'] . '</i>
                    </div>
                    <h2>
                        ' . utf8_encode($linha1['LEGEND_V']) . '
                    </h2>
                </div>
            </div>
        </div>
        ';
        } fechar_conexao_php_mysql($connected);
        ?>
        <?php
        $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
        $stp1 = mysqli_query($connected, "select ID_V, LEGEND_V, LINK_V,ESTADO,IMG_VIDEO, DATA_REG from view_ver_videos WHERE ESTADO = 'ACTIVO' ORDER BY DATA_REG DESC LIMIT 2,7");
        while ($linha1 = mysqli_fetch_assoc($stp1)) {
            echo '
        <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" >
            <div class="item">
                <div class="slick-left-thumb">
                    <img style="max-height: 290px; height: 290px;" src="./Admin/Ficheiros/Multimedia/' . $linha1['IMG_VIDEO'] . '" alt="" >
                    <a href="' . $linha1['LINK_V'] . '" class="popup-youtube">
                        <i class="fa fa-play-circle"></i>
                    </a>
                </div>                
                <div class="blogTxt">
                    <h2>
                        ' . utf8_encode($linha1['LEGEND_V']) . '
                    </h2>
                </div>
            </div>
        </div>
        ';
        } fechar_conexao_php_mysql($connected);
        ?>
        <?php
        $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
        $stp1 = mysqli_query($connected, "select ID_V, LEGEND_V, LINK_V,ESTADO,IMG_VIDEO, DATA_REG from view_ver_videos WHERE ESTADO = 'ACTIVO' ORDER BY DATA_REG DESC");
        while ($linha1 = mysqli_fetch_assoc($stp1)) {
            echo '
        <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" style="display: none;">
            <div class="item">
                <div class="slick-left-thumb">
                    <img style="max-height: 290px; height: 290px;" src="./Admin/Ficheiros/Multimedia/' . $linha1['IMG_VIDEO'] . '" alt="" >
                    <a href="' . $linha1['LINK_V'] . '" class="popup-youtube">
                        <i class="fa fa-play-circle"></i>
                    </a>
                </div>                
                <div class="blogTxt">
                    <h2>
                        ' . utf8_encode($linha1['LEGEND_V']) . '
                    </h2>
                </div>
            </div>
        </div>
        ';
        } fechar_conexao_php_mysql($connected);
        ?>
        <div id="loadMore" style="">
            <a href="#">Load More</a>
        </div>
    </div>
</div>