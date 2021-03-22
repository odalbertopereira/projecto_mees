<?php

session_start();
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();
$userlog = isset($_SESSION['logadomees']['user_id']) ? $_SESSION['logadomees']['user_id'] : '';
$tlegend_slid = utf8_decode($crudmy->limpascript($_POST['tlegend_slid']));
$filed = $_FILES['timg_slid'];
$cont = 0;
//$tipos = array('png', 'jpg', 'jpeg', 'gif');

if ($filed != NULL) {
    foreach ($filed as $item => $keys) {
        if ($keys[0] && $keys != "") {
            $arr = $crudmy->myarrfiles($_FILES['timg_slid']);
            foreach ($arr as $file) {
                $cs = $cont++;
                $file['name'] = $crudmy->tirarAcento_doc(($file['name']));
                $img_upload_slid = time() . '_' . $cs . '_' . 'slide' . '_' . $file['name'];
                if (move_uploaded_file($file['tmp_name'], '../Ficheiros/Slides/' . $img_upload_slid)) {
                    $query_sql = $crud->insert('tb_slides', 'legenda=?,fotos=?,user_id=?', array($tlegend_slid, $img_upload_slid, $userlog));
                    echo $query_sql;
                }
            }
        }
    }
    $crud = NULL;
    $crudmy = NULL;
} else {
    echo -9;
    exit;
}

