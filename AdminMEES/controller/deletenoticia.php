<?php
//na sessao de elimar esta funcionando a 100% não mexer ate a segunda ordem do master
session_start();
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();

$codigo = $crudmy->limpascript($_POST['id']);
$coddescr = base64_decode($codigo);

if (empty($coddescr)) {
    echo -9;
    exit;
} else {
    $sql = $crud->select('caminho,anexo', 'tb_noticias', 'WHERE noticias_id=?', array($coddescr));
    while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
        $file_doc = isset($linha['caminho']) ? $linha['caminho'] : '';
        $file_anexo = isset($linha['anexo']) ? $linha['anexo'] : '';
    }
    if ($file_doc != '' && $file_anexo != '') {
        $sql_del = $crud->Delete('tb_noticias', 'WHERE noticias_id=?', array($coddescr));
        unlink("../Ficheiros/Noticias/imagens/" . $file_doc);
        unlink("../Ficheiros/Noticias/anexos/" . $file_anexo);
        exit;
    } else {
        unlink("../Ficheiros/Noticias/imagens/" . $file_doc);
        $sql_del = $crud->Delete('tb_noticias', 'WHERE noticias_id=?', array($coddescr));
        exit;
    }
    $crud = NULL;
    $crudmy = NULL;
}