<?php

require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();
$codigo = $crudmy->limpascript($_POST['id']);
$codigodescr = base64_decode($codigo);

if (empty($codigodescr)) {
    echo -9;
    exit;
} else {
    $sql = $crud->select('fotos,slide_id', 'tb_slides', 'WHERE slide_id=?', array($codigodescr));
    while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
        $file_img = isset($linha['fotos']) ? $linha['fotos'] : '';
    }
    if ($file_img != '') {
        $sql_del = $crud->Delete('tb_slides', 'WHERE slide_id=?', array($codigodescr));
        unlink("../Ficheiros/Slides/" . $file_img);
        exit;
    }
    $crud = NULL;
    $crudmy = NULL;
}

