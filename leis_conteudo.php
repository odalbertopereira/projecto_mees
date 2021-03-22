<?php require_once './config.php'; ?>
<style>
    .justificar_texto{
        text-align: justify;
        text-justify: inter-word;
    }
    #slider-container{
        display: none;
    }

</style>
<div role="main" class="main">
    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="?pag=index">Inicio</a></li>
                    <li class="active">Direcção do Ensino Básico</li>
                </ul>
            </div>
        </div>
        <h2><strong>Leis</strong> do Ensino Básico!</h2>
        <div class="row">
            <div class="col-md-12">
                <p class="lead justificar_texto">
                    O Ensino Básico é o único ciclo de ensino que conheceu um real desenvolvimento nos últimos cinco anos, em particular no domínio da oferta escolar.
                </p>
            </div>
        </div>
        <hr>
        <!--        <div class="row">
                    <div class="col-md-12">
                        <div class="toggle toggle-primary mt-lg" data-plugin-toggle>
                            <section class="toggle" id="accordion6">
                            <div class="panel-group panel-group-primary" id="accordion2Primary">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion6" href="#collapse6One">
                                                <i class="fa fa-group"></i> Consolidar os ganhos obtidos no domínio de acesso ao Ensino Básico
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse6One" class="accordion-body collapse in">
                                        <div class="panel-body">
                                            <p class="justificar_texto"><?php // carregar_leisbasico(1);    ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryTwo">
                                                <i class="fa fa-group"></i> Melhorar a qualidade e a eficiência do ensino e da aprendizagem
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2PrimaryTwo" class="accordion-body collapse">
                                        <div class="panel-body">
                                            <p class="justificar_texto"><?php // carregar_leisbasico(2);    ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                                                    <label>Consolidar os ganhos obtidos no domínio de acesso ao Ensino Básico</label>
                                                    <div class="toggle-content">
                                                        <p class="justificar_texto"> <?php carregar_leisbasico(1); ?></p>
                                                    </div>
                            </section>
                            <section class="toggle">
                                <label>Melhorar a qualidade e a eficiência do ensino e da aprendizagem</label>
                                <div class="toggle-content">
                                    <p class="justificar_texto"><?php // carregar_leisbasico(2);    ?></p>
                                </div>
                            </section>
                            <section class="toggle">
                                <label>Garantir a igualdade de oportunidade e de sucesso escolar dos alunos, segundo o seu meio de residência, nível de vida das famílias e o sexo (válido para todos os ciclos)</label>
                                <div class="toggle-content">
                                    <p class="justificar_texto"><?php // carregar_leisbasico(3);    ?></p>
                                </div>
                            </section>
                            <section class="toggle">
                                <label>Desenvolver a Educação Especial, na perspectiva da escola para todos e da plena garantia da universalidade do ensino e formação</label>
                                <div class="toggle-content">
                                    <p><?php // carregar_leisbasico(4);    ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group panel-group-primary" id="accordion2Primary">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryOne">
                                    <i class="fa fa-level-down"></i> Consolidar os ganhos obtidos no domínio de acesso ao Ensino Básico
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2PrimaryOne" class="accordion-body collapse in">
                            <div class="panel-body">
                                <p class="justificar_texto"><?php carregar_leisbasico(1); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryTwo">
                                    <i class="fa fa-level-down"></i> Melhorar a qualidade e a eficiência do ensino e da aprendizagem
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2PrimaryTwo" class="accordion-body collapse">
                            <div class="panel-body">
                                <p class="justificar_texto"><?php carregar_leisbasico(2); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryThree">
                                    <i class="fa fa-level-down"></i> Garantir a igualdade de oportunidade e de sucesso escolar dos alunos, segundo o seu meio de residência, nível de vida das famílias e o sexo (válido para todos os ciclos)
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2PrimaryThree" class="accordion-body collapse">
                            <div class="panel-body">
                                <p class="justificar_texto"><?php carregar_leisbasico(3); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2Primary" href="#collapse2PrimaryFour">
                                    <i class="fa fa-level-down"></i>Desenvolver a Educação Especial, na perspectiva da escola para todos e da plena garantia da universalidade do ensino e formação
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2PrimaryFour" class="accordion-body collapse">
                            <div class="panel-body">
                                <p class="justificar_texto"><?php carregar_leisbasico(4); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

