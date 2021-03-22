<style>
    #slider-container{
        display: none;
    }

    .organigrama * {
        margin: 0px;
        padding: 0px;
    }

    .organigrama ul {
        padding-top: 20px;
        position: relative;
    }

    .organigrama li {
        float: left;
        text-align: center;
        list-style-type: none;
        padding: 20px 5px 0px 5px;
        position: relative;
    }

    .organigrama li::before, .organigrama li::after {
        content: '';
        position: absolute;
        top: 0px;
        right: 50%;
        border-top: 1px solid #f80;
        width: 50%;
        height: 20px;
    }

    .organigrama li::after{
        right: auto;
        left: 50%;
        border-left: 1px solid #f80;
    }

    .organigrama li:only-child::before, .organigrama li:only-child::after {
        display: none;
    }

    .organigrama li:only-child {
        padding-top: 0;
    }

    .organigrama li:first-child::before, .organigrama li:last-child::after{
        border: 0 none;
    }

    .organigrama li:last-child::before{
        border-right: 1px solid #f80;
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
        border-radius: 0 5px 0 0;
    }

    .organigrama li:first-child::after{
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
    }

    .organigrama ul ul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        border-left: 1px solid #f80;
        width: 0;
        height: 20px;
    }

    .organigrama li a {
        border: 1px solid #f80;
        padding: 1em 0.75em;
        text-decoration: none;
        color: #333;
        background-color: rgba(255,255,255,0.5);
        font-family: arial, verdana, tahoma;
        font-size: 0.85em;
        display: inline-block;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-transition: all 500ms;
        -moz-transition: all 500ms;
        transition: all 500ms;
    }

    .organigrama li a:hover {
        border: 1px solid #fff;
        color: #ddd;
        background-color: rgba(255,128,0,0.7);
        display: inline-block;
    }

    .organigrama > ul > li > a {
        font-size: 1em;
        font-weight: bold;
    }

    /*    .organigrama > ul > li > ul > li > a {
            width: 8em;
        }*/
</style>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Ministério</a></li>
                    <li class="active">Estrutura</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Estrutura do Ministério</h1>
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
                            <li><a href="?pag=quemsomos">Quem somos</a></li>
                            <li><a href="?pag=visao">Visão</a></li>
                            <li><a href="?pag=missao">Missão</a></li>
                            <li><a href="?pag=estrategia">Estratégia</a></li>
                            <li class="active"><a href="?pag=estrutura">Estrutura do Ministério</a></li>
                            <li><a href="?pag=sisEduc">O Sistema Educativo</a></li>
                            <li><a href="?pag=visao_estrategica">Legislações</a></li>
                            <li>
                                <a href="#">Direções Centrais</a>
                                <ul>
                                    <div class="dropdown-mega-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=depe" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção da Educação Pré-Escolar">DEPE</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=destp" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Secundário e Tecnico Profissional">DESTP</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=deja" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção de Educação de Jovens e Adultos">DEJA</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=desc" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Superior e Ciência">DESC</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=pnase" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Programa Nacional de Alimentação e Saúde Escolar">PNASE</a></a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=dee" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Especial">DEE</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=iges" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Inspeção Geral de Educação e Supervisão">IGES</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=dae" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção de Administração Escolar">DAE</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=daf" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção Administrativa e Finaceira">DAF</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=dpie" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção de Planeamento e Inovação Educativa">DPIE</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=deb" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Básico">DEB</a></span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="dropdown-mega-sub-title"><a href="?pag=exe" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Direcção do Ensino Básico">DEB</a></span>
                                            </div>

                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="?pag=progr_proje">Programas e Projectos</a></li>
                            <li><a href="?pag=compInternacional">Compromissos Internacionais</a></li>
                        </ul>    
                    </aside>
                </div>      
                <div class="col-md-9">
                    <h2>Estrutura do Ministério</h2>
                    <hr class="tall">
                    <div class="row">
                        <div class="center interior container clearfix">
                            <div class="organigrama">
                                <ul>
                                    <li>
                                        <a href="#" data-plugin-tooltip="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Julieta Rodrigues Izidro">Ministra</a>
                                        <ul>
                                            <li>
                                                <a href="#">Director Gabinete</a>

                                            </li>
                                            <li>
                                                <a href="#">Acessor</a>

                                            </li>
                                        </ul>
                                        <!--            <li>
                                                        <a href="#">Coordinador <img src="img/team/team-1.jpg" class="img-responsive" alt="" style="max-width: 90px; min-width: 60px; border-radius: 25px;"></a>
                                                    </li>
                                                    <li><a href="#">Vicepresidente<img src="img/team/team-1.jpg" class="img-responsive" alt="" style="max-width: 90px; min-width: 60px; border-radius: 25px;"></a></li>
                                                    <li><a href="#">Vicepresidente<img src="img/team/team-1.jpg" class="img-responsive" alt="" style="max-width: 90px; min-width: 60px; border-radius: 25px;"></a></li>
                                                    <li><a href="#">Vicepresidente<img src="img/team/team-1.jpg" class="img-responsive" alt="" style="max-width: 90px; min-width: 60px; border-radius: 25px;"></a></li>
                                                    <li><a href="#">Vicepresidente<img src="img/team/team-1.jpg" class="img-responsive" alt="" style="max-width: 90px; min-width: 60px; border-radius: 25px;"></a></li>
                                                    <li><a href="#">Vicepresidente<img src="img/team/team-1.jpg" class="img-responsive" alt="" style="max-width: 90px; min-width: 60px; border-radius: 25px;"></a></li>-->

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>