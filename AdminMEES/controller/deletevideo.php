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
//    $sql = $crud->select('caminho', 'tb_videos', 'WHERE id_video=?', array($coddescr));
//    while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
//        $file_img = isset($linha['caminho']) ? $linha['caminho'] : '';
//    }
//    if ($file_img != '') {
//        $sql_del = $crud->Delete('tb_videos', 'WHERE id_video=?', array($coddescr));
//        unlink("../Ficheiros/Videos/" . $file_img);
//        exit;
//    } else {
//        $sql_del = $crud->Delete('tb_videos', 'WHERE id_video=?', array($coddescr));
//        exit;
//    }
    $sql_del = $crud->Delete('tb_videos_aulas', 'WHERE id_video=?', array($coddescr));
    $crud = NULL;
    $crudmy = NULL;
}