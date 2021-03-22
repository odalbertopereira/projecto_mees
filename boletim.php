<?php
$connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
$estra = mysqli_query($connected, "SELECT ID_BOLETIM,TITULO,CAMINHO,ANO_BOLETIM,FK_USER,FK_GOV,ESTADO,DT_REG FROM view_ver_boletim WHERE ESTADO='ACTIVO' ORDER BY ANO_BOLETIM DESC");
?>
<style>
    #slider-container{
        display: none;
    }
</style>
<div role="main" class="main">
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Boletins</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Boletins</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <hr>
        <div class="featured-boxes">
            <div class="row">
                <?php
                while ($linha = mysqli_fetch_assoc($estra)) {
                    $id_boletim = base64_encode($linha['ID_BOLETIM']);
                    $ficheiro = $linha['CAMINHO'];
                    $ANO_BOLETIM = $linha['ANO_BOLETIM'];
                    $TITULO = utf8_encode($linha['TITULO']);
                    echo"<div class='col-md-3 col-sm-6'>
                            <div class='featured-box featured-box-tertiary featured-box-effect-1 mt-xlg'>
                                <div class='box-content'>
                                    <i class='icon-featured fa fa-book'></i>
                                    <h4 class='text-uppercase'>Boletim {$ANO_BOLETIM}</h4>
                                    <p>{$TITULO}</p>
                                    <p><a href='php/visualizar_pdf_php.php?codigo={$id_boletim}' class='lnk-primary learn-more btn' target='_blanck'>Visualizar e Baixar <i class='fa fa-angle-right'></i></a></p>
                                </div>
                            </div>
                        </div>";
                } fechar_conexao_php_mysql($connected);
                ?>
            </div>
        </div>
        <hr>
    </div>
</div>