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
                <h1>Concurso | Motorista</h1>
            </div>
        </div>
    </div>
</section>
<div class="row areaBack">
    <div class="container">
        <div class=" diagnostc col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar">
                        <ul class="nav nav-list mb-xlg">
                            <li><a href="?pag=concurso_professor">Professores</a></li>
                            <li class="active"><a href="?pag=concurso_motorista">Motorista</a></li>
                            <li><a href="?pag=concurso_servente">Servente</a></li>
                            <li><a href="?pag=concurso_jardineiro">Jardineiro</a></li>
                        </ul>    
                    </aside>
                </div>      
                <div class="col-md-9">
                    <h2>Concurso | Motorista</h2>
                    <hr class="tall">
                    <div class="row">
                        <div class="row">
                            <?php
                            $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
                            $noticias = mysqli_query($connected, "select ID, TITULO, TEXTO,IMAGEN, ESTADO,CONCURSO,DATA_REG from view_ver_concurso  WHERE CONCURSO='motorista' ");
                            while ($linha = mysqli_fetch_assoc($noticias)) {
                                $ID = $linha['ID'];
                                $TITULO = $linha['TITULO'];
                                $strcut = substr($linha['TEXTO'], 0, 300);
                                $texto1 = substr($strcut, 0, strrpos($strcut, ' ')) . '....';
                                $dia = date(" j ", strtotime($linha["DATA_REG"]));
                                $mes = date(" M ", strtotime($linha["DATA_REG"]));
                                echo '
                <div class="col-md-4">
                    <div class="recent-posts">
                        <article class="post">
                            <div class="date">
                                <span class="day">' . $dia . '</span>
                                <span class="month">' . $mes . '</span>
                            </div>
                            <h4><a href="?pag=seeConcurso&Codigo=' . base64_encode($ID) . '">' . $TITULO . '</a></h4>
                                         <p>' . $texto1 . ' <a href="?pag=seeConcurso&Codigo=' . base64_encode($ID) . '" class="read-more">Ler mais <i class="fa fa-angle-right"></i></a></p>
                        </article>
                    </div>
                </div>
                ';
                            } fechar_conexao_php_mysql($connected);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

