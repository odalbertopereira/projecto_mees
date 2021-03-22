<section class="areaBack service-area-actor pt-95 pb-70">
    <div class="container">
        <div class="row">
            <div class="tabs tabs-bottom tabs-center tabs-simple">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tabsNavigationSimpleIcons1" data-toggle="tab">
                            <span class="featured-boxes featured-boxes-style-6 p-none m-none">
                                <span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
                                    <span class="box-content p-none m-none">
                                        <!--<i class="icon-featured fa fa-user"></i>-->
                                        <img src="img/diversos/device.png" style="width: 70px; height: 70px; border-radius: 30px;">
                                    </span>
                                </span>
                            </span>									
                            <p class="mb-none pb-none">Tele-Aula</p>
                        </a>
                    </li>
                    <li>
                        <a href="#tabsNavigationSimpleIcons2" data-toggle="tab">
                            <span class="featured-boxes featured-boxes-style-6 p-none m-none">
                                <span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
                                    <span class="box-content p-none m-none">
                                        <!--<i class="icon-featured fa fa-file"></i>-->
                                        <img src="img/diversos/png-radio.png" style="width: 70px; height: 70px; border-radius: 30px;">
                                    </span>
                                </span>
                            </span>									
                            <p class="mb-none pb-none">Rádio Aula</p>
                        </a>
                    </li>
                    <li>
                        <a href="#tabsNavigationSimpleIcons3" data-toggle="tab">
                            <span class="featured-boxes featured-boxes-style-6 p-none m-none">
                                <span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
                                    <span class="box-content p-none m-none">
                                        <img src="img/diversos/hand.jpg" style="width: 70px; height: 70px; border-radius: 30px;">
                                    </span>
                                </span>
                            </span>									
                            <p class="mb-none pb-none">Informações do COVID-19</p>
                        </a>
                    </li>


                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">

                                        <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                                            <li data-option-value=".all" class="active"><a href="#">Todas Classes</a></li>
                                            <li data-option-value=".websites"><a href="#">Pré-Escolar</a></li>
                                            <li data-option-value=".logos"><a href="#">1ª e 2ª classe</a></li>
                                            <li data-option-value=".brands"><a href="#">3ª e 4ª classe</a></li>
                                            <li data-option-value=".medias"><a href="#">5ª e 6ª classe</a></li>
                                            <li data-option-value=".med"><a href="#">7ª e 8ª classe</a></li>
                                        </ul>

                                        <hr>

                                        <div class="row">
                                            <div class="sort-destination-loader sort-destination-loader-showing">
                                                <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                                                    <?php
                                                    $connected = mysqli_connect('localhost', 'root', 'I', 'id13375646_video_aula');
                                                    $estra = mysqli_query($connected, "SELECT id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse FROM tb_videos_aulas WHERE estado='ACTIVO' order by id_video DESC");
                                                    $URL_PADRAO = "192.168.1.14:8082/mees_covid19/";
//                    
//                    $crud = new CRUD();
//                    $sql_selec = $crud->select('id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse', 'tb_videos_aulas', '', array());
                                                    while ($linha = mysqli_fetch_assoc($estra)) {
                                                        $video = preg_replace('#.*youtube\.com/watch\?v=#', '', $linha['link_v']);
                                                        $cript = explode('www.youtube.com/watch?v=', $linha['link_v']);
                                                        $link = explode('https://', $linha['link_v']);
                                                        $teste = $link[1];
                                                        $cript2 = $cript[1];
                                                        ?>
                                                        <li class="col-md-6 isotope-item all">
                                                            <div class="portfolio-item">
                                                                <a href="<?php echo $teste; ?>" class="popup-youtube" title="<?php echo $video; ?>">
                                                                    <i class="fa fa-youtube-play" style="color: red;"></i>
                                                                </a>
                                                                <span class="thumb-info thumb-info-lighten thumb-info-no-zoom">
                                                                    <span class="thumb-info-wrapper">
                                                                        <div class="embed-responsive embed-responsive-16by9">
                                                                            <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/<?php echo $cript2; ?>"></iframe>
                                                                        </div>                                        
                                                                        <span class="thumb-info-title">
                                                                            <span class="thumb-info-inner"><?php echo $linha['legenda_v']; ?>"></span>
                                                                            <span class="thumb-info-type">MEES</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <?php
                                                    }
                                                    fechar_conexao_php_mysql($connected);
                                                    ?>
                                                    <?php
                                                    $connected = mysqli_connect('localhost', 'root', '', 'id13375646_video_aula');
                                                    $estra = mysqli_query($connected, "SELECT id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse FROM tb_videos_aulas WHERE estado='ACTIVO' AND selclasse='1ª e 2ª Classe'");
                                                    $URL_PADRAO = "192.168.1.14:8082/mees_covid19/";
//                    
//                    $crud = new CRUD();
//                    $sql_selec = $crud->select('id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse', 'tb_videos_aulas', '', array());
                                                    while ($linha = mysqli_fetch_assoc($estra)) {
                                                        $video = preg_replace('#.*youtube\.com/watch\?v=#', '', $linha['link_v']);
                                                        $cript = explode('www.youtube.com/watch?v=', $linha['link_v']);
                                                        $link = explode('https://', $linha['link_v']);
                                                        $teste = $link[1];
                                                        $cript2 = $cript[1];
                                                        ?>
                                                        <li class="col-md-6 isotope-item logos">
                                                            <div class="portfolio-item">
                                                                <a href="<?php echo $teste; ?>" class="popup-youtube" title="<?php echo $video; ?>">
                                                                    <i class="fa fa-youtube-play" style="color: red;"></i>
                                                                </a>
                                                                <span class="thumb-info thumb-info-lighten thumb-info-no-zoom">
                                                                    <span class="thumb-info-wrapper">
                                                                        <div class="embed-responsive embed-responsive-16by9">
                                                                            <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/<?php echo $cript2; ?>"></iframe>
                                                                        </div>                                        
                                                                        <span class="thumb-info-title">
                                                                            <span class="thumb-info-inner"><?php echo $linha['legenda_v']; ?>"></span>
                                                                            <span class="thumb-info-type">MEES</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <?php
                                                    }
                                                    fechar_conexao_php_mysql($connected);
                                                    ?>
                                                    <?php
                                                    $connected = mysqli_connect('localhost', 'root', '', 'id13375646_video_aula');
                                                    $estra = mysqli_query($connected, "SELECT id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse FROM tb_videos_aulas WHERE estado='ACTIVO' AND selclasse='3ª e 4ª Classe'");
                                                    $URL_PADRAO = "192.168.1.14:8082/mees_covid19/";
//                    
//                    $crud = new CRUD();
//                    $sql_selec = $crud->select('id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse', 'tb_videos_aulas', '', array());
                                                    while ($linha = mysqli_fetch_assoc($estra)) {
                                                        $video = preg_replace('#.*youtube\.com/watch\?v=#', '', $linha['link_v']);
                                                        $cript = explode('www.youtube.com/watch?v=', $linha['link_v']);
                                                        $link = explode('https://', $linha['link_v']);
                                                        $teste = $link[1];
                                                        $cript2 = $cript[1];
                                                        ?>
                                                        <li class="col-md-6 isotope-item brands">
                                                            <div class="portfolio-item">
                                                                <a href="<?php echo $teste; ?>" class="popup-youtube" title="<?php echo $video; ?>">
                                                                    <i class="fa fa-youtube-play" style="color: red;"></i>
                                                                </a>
                                                                <span class="thumb-info thumb-info-lighten thumb-info-no-zoom">
                                                                    <span class="thumb-info-wrapper">
                                                                        <div class="embed-responsive embed-responsive-16by9">
                                                                            <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/<?php echo $cript2; ?>"></iframe>
                                                                        </div>                                        
                                                                        <span class="thumb-info-title">
                                                                            <span class="thumb-info-inner"><?php echo $linha['legenda_v']; ?>"></span>
                                                                            <span class="thumb-info-type">MEES</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <?php
                                                    }
                                                    fechar_conexao_php_mysql($connected);
                                                    ?>
                                                    <?php
                                                    $connected = mysqli_connect('localhost', 'root', '', 'id13375646_video_aula');
                                                    $estra = mysqli_query($connected, "SELECT id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse FROM tb_videos_aulas WHERE estado='ACTIVO' AND selclasse='5ª e 6ª Classe'");
                                                    $URL_PADRAO = "192.168.1.14:8082/mees_covid19/";
//                    
//                    $crud = new CRUD();
//                    $sql_selec = $crud->select('id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse', 'tb_videos_aulas', '', array());
                                                    while ($linha = mysqli_fetch_assoc($estra)) {
                                                        $video = preg_replace('#.*youtube\.com/watch\?v=#', '', $linha['link_v']);
                                                        $cript = explode('www.youtube.com/watch?v=', $linha['link_v']);
                                                        $link = explode('https://', $linha['link_v']);
                                                        $teste = $link[1];
                                                        $cript2 = $cript[1];
                                                        ?>
                                                        <li class="col-md-6 isotope-item medias">
                                                            <div class="portfolio-item">
                                                                <a href="<?php echo $teste; ?>" class="popup-youtube" title="<?php echo $video; ?>">
                                                                    <i class="fa fa-youtube-play" style="color: red;"></i>
                                                                </a>
                                                                <span class="thumb-info thumb-info-lighten thumb-info-no-zoom">
                                                                    <span class="thumb-info-wrapper">
                                                                        <div class="embed-responsive embed-responsive-16by9">
                                                                            <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/<?php echo $cript2; ?>"></iframe>
                                                                        </div>                                        
                                                                        <span class="thumb-info-title">
                                                                            <span class="thumb-info-inner"><?php echo $linha['legenda_v']; ?>"></span>
                                                                            <span class="thumb-info-type">MEES</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <?php
                                                    }
                                                    fechar_conexao_php_mysql($connected);
                                                    ?>
                                                    <?php
                                                    $connected = mysqli_connect('localhost', 'root', '', 'id13375646_video_aula');
                                                    $estra = mysqli_query($connected, "SELECT id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse FROM tb_videos_aulas WHERE estado='ACTIVO' AND selclasse='7ª e 8ª Classe'");

//                    
//                    $crud = new CRUD();
//                    $sql_selec = $crud->select('id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse', 'tb_videos_aulas', '', array());
                                                    while ($linha = mysqli_fetch_assoc($estra)) {
                                                        $video = preg_replace('#.*youtube\.com/watch\?v=#', '', $linha['link_v']);
                                                        $cript = explode('www.youtube.com/watch?v=', $linha['link_v']);
                                                        $link = explode('https://', $linha['link_v']);
                                                        $teste = $link[1];
                                                        $cript2 = $cript[1];
                                                        ?>
                                                        <li class="col-md-6 isotope-item med">
                                                            <div class="portfolio-item">
                                                                <a href="<?php echo $teste; ?>" class="popup-youtube" title="<?php echo $video; ?>">
                                                                    <i class="fa fa-youtube-play" style="color: red;"></i>
                                                                </a>
                                                                <span class="thumb-info thumb-info-lighten thumb-info-no-zoom">
                                                                    <span class="thumb-info-wrapper">
                                                                        <div class="embed-responsive embed-responsive-16by9">
                                                                            <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/<?php echo $cript2; ?>"></iframe>
                                                                        </div>                                        
                                                                        <span class="thumb-info-title">
                                                                            <span class="thumb-info-inner"><?php echo $linha['legenda_v']; ?>"></span>
                                                                            <span class="thumb-info-type">MEES</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <?php
                                                    }
                                                    fechar_conexao_php_mysql($connected);
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                        <div class="center">
                            <!--                                        <h4>HTML5 / CSS3 / JS</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>-->
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimpleIcons3">
                        <div class="center">
                            <!--                                        <h4>500+ Google Fonts</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>-->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Service Single Item Area Start -->

    </div>

    <div id="loadMore" style="">
        <a href="#">Load More</a>
    </div>

</section>

<div class="row">
    <div class="sort-destination-loader sort-destination-loader-showing">
        <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
            <?php
            $connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_sitemees');
            $estra = mysqli_query($connected, "SELECT id_video,legenda_v,caminho,link_v,user_id,estado,dtReg,selclasse FROM tb_videos_aulas WHERE estado='ACTIVO' order by id_video DESC");
            $URL_PADRAO = "192.168.1.14:8082/mees_covid19/";
            while ($linha = mysqli_fetch_assoc($estra)) {
                $video = preg_replace('#.*youtube\.com/watch\?v=#', '', $linha['link_v']);
                $cript = explode('www.youtube.com/watch?v=', $linha['link_v']);
                $link = explode('https://', $linha['link_v']);
                $teste = $link[1];
                $cript2 = $cript[1];
                ?>
                <li class="col-md-6 isotope-item brands moreBox" style="display: none;">
                    <div class="portfolio-item">
                        <a href="<?php echo $teste; ?>" class="popup-youtube" title="<?php echo $video; ?>">
                            <i class="fa fa-youtube-play" style="color: red;"></i>
                        </a>
                        <span class="thumb-info thumb-info-lighten thumb-info-no-zoom">
                            <span class="thumb-info-wrapper">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/<?php echo $cript2; ?>"></iframe>
                                </div>                                        
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">sadasd</span>
                                    <span class="thumb-info-type">Brand</span>
                                </span>
                            </span>
                        </span>
                        </a>
                    </div>
                </li>
                <?php
            }
            fechar_conexao_php_mysql($connected);
            ?>
        </ul>
    </div>
</div>


