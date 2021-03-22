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
                    <li class="active">Nossos Parceiros</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Nossos Parceiros</h1>
            </div>
        </div>
    </div>
</section>
<div class="interior container clearfix">
    <section id="partners" class="mb-xlg">
        <h2 class="mb-none text-color-dark">Nossos Parceiros</h2>
        <div class="row mt-lg">
            <div class="content-grid content-grid-dashed mt-xlg mb-lg">
                <div class="row content-grid-row">
                    <?php
                    $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
                    $noticias = mysqli_query($connected, "select ID, INSITUICAO, SIGLA, LOGO,ESTADO,WEBSITE,DATA_REG from view_ver_parceiro WHERE ESTADO = 'ACTIVO' ORDER BY ID DESC ");
                    while ($linha = mysqli_fetch_assoc($noticias)) {
                        echo '
                        <div class="content-grid-item col-sm-4 center">
                        <a class="users-list-name" href="' . $linha['WEBSITE'] . '">
                            <img class="img-responsive" src="./Admin/Ficheiros/Parceiros/' . $linha['LOGO'] . '" alt="" style="width: 190px;">
                        </a>
                        </div>
                            ';
                    } fechar_conexao_php_mysql($connected);
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
