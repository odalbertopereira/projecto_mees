<?php
//na sessao de adicionar esta funcionando a 100% não mexer ate a segunda ordem do master
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();

$regf_id = $crudmy->limpascript($_POST['regf_id']);
$tusername = $crudmy->limpascript($_POST['tusernameedit']);
$temail = $crudmy->limpascript($_POST['temailedit']);
$temailalt = $crudmy->limpascript($_POST['temailaltedit']);
$tfoto_ant = $crudmy->limpascript($_POST['tfotoedit']);
$fotouser = $_FILES['tnewfotoedit'];
if (empty($tusername) || empty($temail)) {
    echo -9;
    exit;
} else if ($temail != '' && !preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\.\-]+\.[a-z]{2,3}$/i', $temail)) {
    echo -2;
    exit;
} elseif ($temailalt != '' && !preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\.\-]+\.[a-z]{2,3}$/i', $temailalt)) {
    echo -3;
    exit;
} else {

    if ((!empty($tfoto_ant) && $fotouser['name'] != NULL) && !empty($temailalt)) {
        if ($fotouser['name'] != NULL) {
            $tipos = array('png', 'jpg', 'jpeg', 'gif');
            $fotouser['name'] = $crudmy->tirarAcento_doc(($fotouser['name']));
            $explode = explode('.', $fotouser['name']);
            $tipo = strtolower(end($explode));
            $tamanho = 1024 * 1024 * 4;
            if ($fotouser['size'] > $tamanho) {
                echo -6;
                exit;
            } else if (array_search($tipo, $tipos) === false) {
                echo -7;
                exit;
            } else {
                $img_fotouser = time() . '_' . 'img' . '_' . $fotouser['name'];
                move_uploaded_file($fotouser['tmp_name'], '../Ficheiros/PhotoUser/' . $img_fotouser);
                if ($img_fotouser == NULL) {
                    echo -8;
                    exit;
                }
            }
        }
        $sql_res = $crud->update('tb_usuario', 'user_name=?,user_email=?,user_email_alter=?,user_foto=? where user_id=?', array($tusername, $temail, $temailalt, $img_fotouser, $regf_id));
        if ($sql_res == NULL) {
            unlink("../Ficheiros/PhotoUser/" . $tfoto_ant);
            echo $regf_id;
            exit;
        }
    } elseif ((!empty($tfoto_ant) && $fotouser['name'] == NULL) && !empty($temailalt)) {

        $sql_res = $crud->update('tb_usuario', 'user_name=?,user_email=?,user_email_alter=? where user_id=?', array($tusername, $temail, $temailalt, $regf_id));
        if ($sql_res == NULL) {
            echo $regf_id;
            exit;
        }
    } elseif ((!empty($tfoto_ant) && $fotouser['name'] != NULL) && empty($temailalt)) {
        if ($fotouser['name'] != NULL) {
            $tipos = array('png', 'jpg', 'jpeg', 'gif');
            $fotouser['name'] = $crudmy->tirarAcento_doc(($fotouser['name']));
            $explode = explode('.', $fotouser['name']);
            $tipo = strtolower(end($explode));
            $tamanho = 1024 * 1024 * 4;
            if ($fotouser['size'] > $tamanho) {
                echo -6;
                exit;
            } else if (array_search($tipo, $tipos) === false) {
                echo -7;
                exit;
            } else {
                $img_fotouser = time() . '_' . 'img' . '_' . $fotouser['name'];
                move_uploaded_file($fotouser['tmp_name'], '../Ficheiros/PhotoUser/' . $img_fotouser);
                if ($img_fotouser == NULL) {
                    echo -8;
                    exit;
                }
            }
        }
        $sql_res = $crud->update('tb_usuario', 'user_name=?,user_email=?,user_email_alter=?,user_foto=? where user_id=?', array($tusername, $temail, $temailalt, $img_fotouser, $regf_id));
        if ($sql_res == NULL) {
            unlink("../Ficheiros/PhotoUser/" . $tfoto_ant);
            echo $regf_id;
            exit;
        }
    } else {
        $sql_res = $crud->update('tb_usuario', 'user_name=?,user_email=? where user_id=?', array($tusername, $temail, $regf_id));
        if ($sql_res == NULL) {
            echo $regf_id;
            exit;
        }
    }

    $crud = NULL;
    $crudmy = NULL;
}
