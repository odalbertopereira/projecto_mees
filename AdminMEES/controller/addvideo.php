<?php

session_start();
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();
$userlog = isset($_SESSION['logadomees']['user_id']) ? $_SESSION['logadomees']['user_id'] : '';
$tlegenda = utf8_decode($crudmy->limpascript($_POST['tlegenda']));
$tlink_video = $crudmy->limpascript($_POST['tlink_video']);
$selclasse = utf8_decode($crudmy->limpascript($_POST['selclasse']));

//$timg_video = $_FILES['timg_video'];

if (empty($tlegenda) || empty($tlink_video) || empty($selclasse)) {
    echo -9;
    exit;
} else {
    $sql_cont = $crud->select('COUNT(id_video)', 'tb_videos_aulas', 'WHERE link_v=?', array($tlink_video));
    $res_cont = $sql_cont->fetch(PDO::FETCH_NUM);
    if ($res_cont[0] == 0) {
//        if ($timg_video['name'] != NULL) {
//            $tipos = array('png', 'jpg', 'jpeg', 'gif');
//            $timg_video['name'] = $crudmy->tirarAcento_doc(($timg_video['name']));
//            $explode = explode('.', $timg_video['name']);
//            $tipo = strtolower(end($explode));
//            $tamanho = 1024 * 1024 * 4;
//            if ($timg_video['size'] > $tamanho) {
//                echo -6;
//                exit;
//            } else if (array_search($tipo, $tipos) === false) {
//                echo -7;
//                exit;
//            } else {
//                $img_video = time() . '_' . 'img' . '_' . $timg_video['name'];
//                move_uploaded_file($timg_video['tmp_name'], '../Ficheiros/Videos_Aulas/' . $img_video);
//                if ($img_video == NULL) {
//                    echo -8;
//                    exit;
//                }
//            }
//        }
//        $reg = explode('https://www.youtube.com/watch?v=', $link);
        $query_sql = $crud->insert('tb_videos_aulas', 'legenda_v=?,link_v=?,selclasse=?,user_id=?', array($tlegenda, $tlink_video, $selclasse, $userlog));
        echo $query_sql;
        exit;
    } else {
        echo -1;
        exit;
    }
    $crud = NULL;
    $crudmy = NULL;
}

