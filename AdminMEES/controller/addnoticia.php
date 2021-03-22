<?php
//na sessao de adicionar esta funcionando a 100% não mexer ate a segunda ordem do master
session_start();
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();
$userlog = isset($_SESSION['logadomp']['user_id']) ? $_SESSION['logadomp']['user_id'] : '';
$titulo = $crudmy->limpascript($_POST['ttitulo']);
$descr = $crudmy->limpascript($_POST['tdescr']);

$imagem = $_FILES['timg'];
$anexo = $_FILES['tanexo'];
if (empty($titulo) || empty($descr)) {
    echo -9;
    exit;
} else {
    if ($imagem['name'] != NULL) {
        $tipos = array('png', 'jpg', 'jpeg', 'gif');
        $imagem['name'] = $crudmy->tirarAcento_doc(($imagem['name']));
        $explode = explode('.', $imagem['name']);
        $tipo = strtolower(end($explode));
        $tamanho = 1024 * 1024 * 4;
        if ($imagem['size'] > $tamanho) {
            echo -6;
            exit;
        } else if (array_search($tipo, $tipos) === false) {
            echo -7;
            exit;
        } else {
            $img_file = time() . '_' . 'img' . '_' . $imagem['name'];
            move_uploaded_file($imagem['tmp_name'], '../Ficheiros/Noticias/imagens/' . $img_file);
            if ($img_file == NULL) {
                echo -8;
                exit;
            }
        }
    }
    if ($anexo['name'] != NULL) {
        $tipos = array('png', 'jpg', 'jpeg', 'gif', 'pdf', 'doc', 'docx');
        $anexo['name'] = $crudmy->tirarAcento_doc(($anexo['name']));
        $explode = explode('.', $anexo['name']);
        $tipo = strtolower(end($explode));
        $tamanho = 1024 * 1024 * 4;
        if ($anexo['size'] > $tamanho) {
            echo -6;
            exit;
        } else if (array_search($tipo, $tipos) === false) {
            echo -7;
            exit;
        } else {
            $img_anexo = time() . '_' . 'docer' . '_' . $anexo['name'];
            move_uploaded_file($anexo['tmp_name'], '../Ficheiros/Noticias/anexos/' . $img_anexo);
            if ($img_anexo == NULL) {
                echo -8;
                exit;
            }
        }
        $query_sql = $crud->insert('tb_noticias', 'assunto=?,descricao=?,caminho=?,anexo=?,fk_user_reg=?', array($titulo, $descr, $img_file, $img_anexo, $userlog));
        echo $query_sql;
    } else {
        $query_sql = $crud->insert('tb_noticias', 'assunto=?,descricao=?,caminho=?,fk_user_reg=?', array($titulo, $descr, $img_file, $userlog));
        echo $query_sql;
    }
    $crud = null;
    $crudmy = null;
}

