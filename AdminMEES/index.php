<?php
session_start();

if (isset($_SESSION['logadomees']['user_id']) == 0) {
    require_once './login.php';
} else {
    require_once './link.php';
    require_once './require/class/CRUD.class.php';
    require_once './Modal/Modal.php';
    ?>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <?php require_once './menu_lateral.php'; ?>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <?php require_once './topo.php'; ?>
            </div>
            <?php
            if (isset($_REQUEST['pag'])) {
                if ($_REQUEST['pag'] == 'index') {
                    require_once './index.php';
                }
                if ($_REQUEST['pag'] == 'mdl_table') {
                    require_once './modelo_tabela.php';
                }
                if ($_REQUEST['pag'] == 'modelo_form') {
                    require_once './modelo_formulario.php';
                }
                if ($_REQUEST['pag'] == 'noticias') {
                    require_once './form_noticias.php';
                }
                if ($_REQUEST['pag'] == 'adduser') {
                    require_once './form_usuario.php';
                }
                if ($_REQUEST['pag'] == 'userlist') {
                    require_once './list_user.php';
                }
                if ($_REQUEST['pag'] == 'seeAnexo') {
                    require_once './file_maneger.php';
                }
                if ($_REQUEST['pag'] == 'videos') {
                    require_once './form_video.php';
                }
                if ($_REQUEST['pag'] == 'slids') {
                    require_once './form_slides.php';
                }
//                gabinete formacao
                if ($_REQUEST['pag'] == 'oferta') {
                    require_once './gabformacao/ofertaformariva.php';
                }
            } else {
                require_once './conteudo.php';
            }
            ?>
            <div class="footer"><?php require_once './footer.php'; ?></div>
            <?php require_once './mini_chat.php'; ?>
        </div>

    </div>
    <?php require_once './script.php'; ?>
    <?php
}
