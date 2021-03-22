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
            <div class="col-md-12" style="margin-top: 30px;">

                <?php
                $id_concurso = base64_decode($_REQUEST['Codigo']);
                $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
                $noticias = mysqli_query($connected, "select ID, TITULO, TEXTO,IMAGEN, ESTADO,CONCURSO,DATA_REG from view_ver_concurso where ID= '$id_concurso'");
                while ($linha = mysqli_fetch_assoc($noticias)) {
                    echo '
                <br>
                <img class="img-responsive" src="./Admin/Ficheiros/Concurso/' . $linha['IMAGEN'] . '" style="max-width: 770; max-height: 370px;">
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
                
            </div>
                ';
                } fechar_conexao_php_mysql($connected);
                ?>
            </div>
        </div>
    </div>
</div>

