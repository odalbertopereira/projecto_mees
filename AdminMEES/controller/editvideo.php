<?php

session_start();
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();
$userlog = isset($_SESSION['logadomees']['user_id']) ? $_SESSION['logadomees']['user_id'] : '';
$tlegendedit = $crudmy->limpascript($_POST['tlegendedit']);
$tlink_edit = $crudmy->limpascript($_POST['tlink_edit']);
$reh_id = $crudmy->limpascript($_POST['reh_id']);

if (empty($tlegendedit) || empty($tlink_edit)) {
    echo -9;
    exit;
} else {
    $sql_res = $crud->update('tb_videos_aulas', 'legenda_v=?,link_v=?,user_update=? where id_video=?', array($tlegendedit, $tlink_edit, $userlog, $reh_id));
    if ($sql_res == NULL) {
        echo $reh_id;
        $crud = NULL;
        $crudmy = NULL;
        exit;
    }
}

