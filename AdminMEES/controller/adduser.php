<?php

//na sessao de adicionar esta funcionando a 100% não mexer ate a segunda ordem do master
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();

$tusername = utf8_decode($crudmy->limpascript($_POST['tusername']));
$temail = $crudmy->limpascript($_POST['temail']);
$temailalt = $crudmy->limpascript($_POST['temailalt']);
$fotouser = $_FILES['tfoto_user'];
$senha_padrao = 'b5256606f36ef30462508cb7d2c58679441f3ae91d7649a0957f0089c3167f1392ea5f426ad7581232cdc57b831ee113b4f805d52f3507d788cd5109d01aa0c2';
if (empty($tusername) || empty($temail)) {
    echo -9;
    exit;
} elseif (!preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\.\-]+\.[a-z]{2,3}$/i', $temail)) {
    echo -3;
    exit;
} elseif (!empty($temailalt) && !preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\.\-]+\.[a-z]{2,3}$/i', $temailalt)) {
    echo -4;
    exit;
} else {
    $sql_cont = $crud->select('COUNT(user_id)', 'tb_usuario', 'WHERE user_email=?', array($temail));
    $res_cont = $sql_cont->fetch(PDO::FETCH_NUM);
    if ($res_cont[0] == 0) {
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
        if (!empty($temailalt)) {
            $query_sql = $crud->insert('tb_usuario', 'user_name=?,user_senha=?,user_email=?,user_email_alter=?,user_foto=?', array($tusername, $senha_padrao, $temail, $temailalt,$img_fotouser));
            echo $query_sql;
            exit;
        } else {
            $query_sql_al = $crud->insert('tb_usuario', 'user_name=?,user_senha=?,user_email=?,user_foto=?', array($tusername, $senha_padrao, $temail, $img_fotouser));
            echo $query_sql_al;
            exit;
        }
    } else {
        echo -2;
        exit;
    }
    $crud = NULL;
    $crudmy = NULL;
}
