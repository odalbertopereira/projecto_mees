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
                    <li class="active">Anuncios</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Anuncios</h1>
            </div>
        </div>
    </div>
</section>

<div class="movie-details-area pt-100 pb-50">
    <div class="container">
        <?php
        $id_anuncio = base64_decode($_REQUEST['Codigo']);
        $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
        $noticias1 = mysqli_query($connected, "select ID_AN, TITULO_AN, CAMINHO_AN, TEXTO_AN,ESTADO,DATA_REG from view_ver_anuncio  where ID_AN= '$id_anuncio'");
        while ($linha = mysqli_fetch_assoc($noticias1)) {
            $ID = $linha['ID_AN'];
            $TITULO = $linha['TITULO_AN'];
            $IMAGEM = $linha['CAMINHO_AN'];
            $TEXTO = $linha['TEXTO_AN'];
            $DATA_REG = $linha['DATA_REG'];
            echo '
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "movie-details-meta">
                    <h3>' . $TITULO . '</h3>
                    <ul>
                        <li>' . $DATA_REG . '</li>
                    </ul>
                </div>
            </div>
            <div class = "col-lg-7">
                <div class = "movie-details-info">
                    <p>' . $TEXTO . '</p>
                </div>
            </div>
            <div class = "col-lg-5">
                <div class = "">
                    <div class = "movie-details-pop">
                        <img class="img-responsive" src="./Admin/Ficheiros/Anuncios/' . $IMAGEM . '" alt="" style="max-width: 550px;">
                    </div>
                </div>
                <h5 class = "trailer-title">' . $TITULO . '</h5>
            </div>
        </div>
        ';
        } fechar_conexao_php_mysql($connected);
        ?>
    </div>
</div>