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
                    <li class="active">Sobre Nós</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</section>

<div class="body">
    <div role="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar">
                        <ul class="nav nav-list narrow">
                            <li><a href="?pag=quemsomos">Quem somos</a></li>
                            <li><a href="?pag=visao">Visão</a></li>
                            <li><a href="?pag=missao">Missão</a></li>
                            <li><a href="?pag=estrategia">Estratégia</a></li>
                        </ul>

                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="row areaBack">
                        <div class="container">
                            <div class=" diagnostc col-md-9">
                                <div class="panel-group panel-group-primary" id="accordion2Primary">
                                    <?php
                                    $connectd = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');
                                    $gov = 1;
                                    $resultado = mysqli_query($connectd, "SELECT descricao FROM tb_quem_somos WHERE Estado = 'ACTIVO' AND fk_gov_quem_somos = '$gov'") or die("erro ao selecionar quem somos");
                                    $resul_visao = mysqli_query($connectd, "SELECT descricao FROM tb_visao WHERE Estado = 'ACTIVO' AND fk_gov_visao = '$gov'") or die("erro ao selecionar visao");
                                    $resul_missao = mysqli_query($connectd, "SELECT descricao FROM tb_missao WHERE Estado = 'ACTIVO' AND fk_gov_missao = '$gov'") or die("erro ao selecionar missao");
                                    $resul_estra = mysqli_query($connectd, "SELECT descricao FROM tb_estrategia WHERE Estado = 'ACTIVO' AND fk_gov_estrategia = '$gov'") or die("erro ao selecionar missao");
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryOne">
                                                    <i class="fa fa-level-down"></i> Quem somos
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2PrimaryOne" class="accordion-body collapse in">
                                            <div class="panel-body">
                                                <?php
                                                while ($linha = mysqli_fetch_assoc($resultado)) {
                                                    $desc = utf8_encode($linha['descricao']);
                                                    echo "<p class = 'justificar_texto'>" . ($desc) . "</p>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryTwo">
                                                    <i class="fa fa-level-down"></i> Visão
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2PrimaryTwo" class="accordion-body collapse">
                                            <div class="panel-body">
                                                <?php
                                                while ($linh_vi = mysqli_fetch_assoc($resul_visao)) {
                                                    $vis = utf8_encode($linh_vi['descricao']);
                                                    echo "<p class='justificar_texto'>" . $vis . "</p>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryThree">
                                                    <i class="fa fa-level-down"></i>Missão
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2PrimaryThree" class="accordion-body collapse">
                                            <div class="panel-body">
                                                <?php
                                                while ($linh_mi = mysqli_fetch_assoc($resul_missao)) {
                                                    $mis = utf8_encode($linh_mi['descricao']);
                                                    echo "<p class='justificar_texto'>" . $mis . "</p>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryFour">
                                                    <i class="fa fa-level-down"></i>Estratégia 
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2PrimaryFour" class="accordion-body collapse">
                                            <div class="panel-body">
                                                <?php
                                                while ($linh_estr = mysqli_fetch_assoc($resul_estra)) {
                                                    $estr = utf8_encode($linh_estr['descricao']);
                                                    echo "<p class='justificar_texto'>" . $estr . "</p>";
                                                } fechar_conexao_php_mysql($connectd);
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


