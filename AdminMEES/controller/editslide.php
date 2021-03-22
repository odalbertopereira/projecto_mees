<?php

session_start();
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();
$userlog = isset($_SESSION['logadomp']['user_id']) ? $_SESSION['logadomp']['user_id'] : '';
$tlegend_slidedit = $crudmy->limpascript($_POST['tlegend_slidedit']);
$timg_slidedit = $crudmy->limpascript($_POST['timg_slidedit']);
$rehs_id = $crudmy->limpascript($_POST['rehs_id']);

$file_new = $_FILES['tnew_imgslidedit'];

if (!empty($timg_slidedit) && $file_new['name'] != NULL) {
    if ($file_new['name'] != NULL) {
        $tipos = array('png', 'jpg', 'jpeg', 'gif');
        $file_new['name'] = $crudmy->tirarAcento_doc(($file_new['name']));
        $explode = explode('.', $file_new['name']);
        $tipo = strtolower(end($explode));
        $tamanho = 1024 * 1024 * 4;
        if ($file_new['size'] > $tamanho) {
            echo -6;
            exit;
        } else if (array_search($tipo, $tipos) === false) {
            echo -7;
            exit;
        } else {
            $img_new = time() . '_' . 'up' . '_' . $file_new['name'];
            move_uploaded_file($file_new['tmp_name'], '../Ficheiros/Slides/' . $img_new);
            if ($img_new == NULL) {
                echo -8;
                exit;
            }
        }
    }
    $sql_res = $crud->update('tb_slides', 'legenda=?,fotos=?,user_update=? where slide_id=?', array($tlegend_slidedit, $img_new, $userlog, $rehs_id));
    if ($sql_res == NULL) {
        unlink("../Ficheiros/Slides/" . $timg_slidedit);
        echo $rehs_id;
        exit;
    } else {
        echo -3;
        exit;
    }
    $crud = NULL;
    $crudmy = NULL;
} else {
    $sql_res = $crud->update('tb_slides', 'legenda=?,user_update=? where slide_id=?', array($tlegend_slidedit, $userlog, $rehs_id));
    if ($sql_res == NULL) {
        echo $rehs_id;
        exit;
    } else {
        echo -3;
        exit;
    }
    $crud = NULL;
    $crudmy = NULL;
}

