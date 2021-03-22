<?php
require_once './config.php';
require_once './cabecalho.php';
?>
<!--adicionar uma foto no fundo e alterar as cores nos background dos outros temas...-->
<div class="body" style="background: url('');">
    <?php require_once './topo_menu.php' ?>
    <div role="main" class="main" id="slider-container">
        <?php require_once './slid_show.php'; ?>
    </div>

    <?php
    if (isset($_REQUEST['pag'])) {
        if ($_REQUEST['pag'] == 'leis_basico') {
            require_once "./leis_conteudo.php";
        }
        if ($_REQUEST['pag'] == 'index') {
            require_once "./mees.php";
        }
        if ($_REQUEST['pag'] == 'nos') {
            require_once "./nos.php";
        }
        if ($_REQUEST['pag'] == 'missao') {
            require_once "./missao.php";
        }
        if ($_REQUEST['pag'] == 'visao_estrategica') {
            require_once "./visao_estrategica.php";
        }
        if ($_REQUEST['pag'] == 'estrutura') {
            require_once "./estrutura.php";
        }
        if ($_REQUEST['pag'] == 'contactos') {
            require_once "./contactos.php";
        }
        if ($_REQUEST['pag'] == 'contactos_direcoes') {
            require_once "./contactos_direc.php";
        }
        if ($_REQUEST['pag'] == 'boletim') {
            require_once "./boletim.php";
        }
        if ($_REQUEST['pag'] == 'seeNews') {
            require_once "./informacao.php";
        }
        if ($_REQUEST['pag'] == 'source_hpei_4ZPeXIHsH') {
            require_once "./seeMore.php";
        }
        if ($_REQUEST['pag'] == 'seeConcurso') {
            require_once "./seeConcurso.php";
        }
        if ($_REQUEST['pag'] == 'seeMultimedia') {
            require_once "./seeMultimedia.php";
        }
        if ($_REQUEST['pag'] == 'seeParceiros') {
            require_once "./seeParceiros.php";
        }
        if ($_REQUEST['pag'] == 'concurso_professor') {
            require_once "./concurso_professor.php";
        }
        if ($_REQUEST['pag'] == 'concurso_servente') {
            require_once "./concurso_servente.php";
        }
        if ($_REQUEST['pag'] == 'concurso_motorista') {
            require_once "./concurso_motorista.php";
        }
        if ($_REQUEST['pag'] == 'concurso_jardineiro') {
            require_once "./concurso_jardineiro.php";
        }
        if ($_REQUEST['pag'] == 'seeEstudantes') {
            require_once "./seeEstudantes.php";
        }
        if ($_REQUEST['pag'] == 'seeProfessor') {
            require_once "./seeProfessor.php";
        }
        if ($_REQUEST['pag'] == 'seePaisEncarregadoEducacao') {
            require_once "./seePaisEncarregadoEducacao.php";
        }
        if ($_REQUEST['pag'] == 'depe') {
            require_once "./pag_depe.php";
        }
        if ($_REQUEST['pag'] == 'destp') {
            require_once "./pag_destp.php";
        }
        if ($_REQUEST['pag'] == 'deja') {
            require_once "./pag_deja.php";
        }
        if ($_REQUEST['pag'] == 'desc') {
            require_once "./pag_desc.php";
        }
        if ($_REQUEST['pag'] == 'pnase') {
            require_once "./pag_pnase.php";
        }
        if ($_REQUEST['pag'] == 'dee') {
            require_once "./pag_dee.php";
        }
        if ($_REQUEST['pag'] == 'iges') {
            require_once "./pag_iges.php";
        }
        if ($_REQUEST['pag'] == 'dae') {
            require_once "./pag_dae.php";
        }
        if ($_REQUEST['pag'] == 'daf') {
            require_once "./pag_daf.php";
        }
        if ($_REQUEST['pag'] == 'dpie') {
            require_once "./pag_dpie.php";
        }
        if ($_REQUEST['pag'] == 'deb') {
            require_once "./pag_deb.php";
        }
        if ($_REQUEST['pag'] == 'exe') {
            require_once "./tsts.php";
        }
        if ($_REQUEST['pag'] == 'progr_proje') {
            require_once "./programas_projetos.php";
        }
        if ($_REQUEST['pag'] == 'contacto_direcoes') {
            require_once "./contacto_direcoes.php";
        }
        if ($_REQUEST['pag'] == 'seeMore') {
            require_once "./seeMore.php";
        }
        if ($_REQUEST['pag'] == 'seeAnuncios') {
            require_once "./seeAnuncios.php";
        }
        if ($_REQUEST['pag'] == 'News') {
            require_once "./News.php";
        }
        if ($_REQUEST['pag'] == 'parceiros') {
            require_once "./";
        }
        //        ministerio
        if ($_REQUEST['pag'] == 'quemsomos') {
            require_once "./quemsomos.php";
        }
        if ($_REQUEST['pag'] == 'visao') {
            require_once "./visao.php";
        }
        if ($_REQUEST['pag'] == 'estrategia') {
            require_once "./estrategia.php";
        }
        if ($_REQUEST['pag'] == 'missao') {
            require_once "./missao.php";
        }
        if ($_REQUEST['pag'] == 'sisEduc') {
            require_once "./sistemaEduc.php";
        }
        if ($_REQUEST['pag'] == 'compInternacional') {
            require_once "./compInternacional.php";
        }
//        gabinete formação
        if ($_REQUEST['pag'] == 'gabineteFormacaoContinuaExercicio') {
            require_once "./GabFormacao.php";
        }
        if ($_REQUEST['pag'] == 'gabquemsomos') {
            require_once "./gabFor_quemSomos.php";
        }
        if ($_REQUEST['pag'] == 'ofertaformativa') {
            require_once "./gabFor_oferta_fomativa.php";
        }
        if ($_REQUEST['pag'] == 'formularios') {
            require_once "./gabFor_formularios.php";
        }
        if ($_REQUEST['pag'] == 'faleconnosco') {
            require_once "./gabFor_faleconnosco.php";
        }
    } else {
        require_once "./mees.php";
    }
    ?>
    <?php require_once './footer.php'; ?>
</div>
<?php
require_once './script.php';
