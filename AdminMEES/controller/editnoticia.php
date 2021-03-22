<?php
//na sessao de editar esta funcionando a 100% não mexer ate a segunda ordem do master
session_start();
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();

$notic_id = $crudmy->limpascript($_POST['reg_id']);
$titulo = $crudmy->limpascript($_POST['ttituloedit']);
$descr = $crudmy->limpascript($_POST['tdescredit']);
$anexo_ant = $crudmy->limpascript($_POST['tanexoedit_ant']);
$img_ant = $crudmy->limpascript($_POST['timg_ant']);
$userlog = isset($_SESSION['logadomp']['user_id']) ? $_SESSION['logadomp']['user_id'] : '';
// recebi o novo anexo para actualizar o antigo
$anexo = $_FILES['tanexoedit'];
$newimg = $_FILES['tnewimgedit'];
//var_dump($anexo);
if (empty($notic_id) || empty($titulo) || empty($descr)) {
    echo -9;
    exit;
} else {

    if ((!empty($img_ant) && $newimg['name'] == NULL) && ($anexo['name'] == NULL && empty($anexo_ant))) {
        //não é preciso remover nenhum ficheiro.. apenas uma actualização com os campos de titulo e descrição
        $sql_res = $crud->update('tb_noticias', 'assunto=?,descricao=?,fk_user_up=? where noticias_id=?', array($titulo, $descr, $userlog, $notic_id));
        if ($sql_res == NULL) {
            echo $notic_id;
            exit;
        } else {
            echo -3;
            exit;
        }
    } elseif ((!empty($img_ant) && $newimg['name'] != NULL) && ($anexo['name'] == NULL && empty($anexo_ant))) {
        if ($newimg['name'] != NULL) {
            $tipos = array('png', 'jpg', 'jpeg', 'gif');
            $newimg['name'] = $crudmy->tirarAcento_doc(($newimg['name']));
            $explode = explode('.', $newimg['name']);
            $tipo = strtolower(end($explode));
            $tamanho = 1024 * 1024 * 4;
            if ($newimg['size'] > $tamanho) {
                echo -6;
                exit;
            } else if (array_search($tipo, $tipos) === false) {
                echo -7;
                exit;
            } else {
                $img_new = time() . '_' . 'up' . '_' . $newimg['name'];
                move_uploaded_file($newimg['tmp_name'], '../Ficheiros/Noticias/imagens/' . $img_new);
                if ($img_new == NULL) {
                    echo -8;
                    exit;
                }
            }
        }
        $sql_res = $crud->update('tb_noticias', 'assunto=?,descricao=?,caminho=?,fk_user_up=? where noticias_id=?', array($titulo, $descr, $img_new, $userlog, $notic_id));
        if ($sql_res == NULL) {
            unlink("../Ficheiros/Noticias/imagens/" . $img_ant);
            echo $notic_id;
            exit;
        } else {
            echo -3;
            exit;
        }
    } elseif ((!empty($img_ant) && $newimg['name'] == NULL) && ($anexo['name'] != NULL && empty($anexo_ant))) {
        if ($anexo['name'] != NULL) {
            $tipos = array('pdf', 'doc', 'docx');
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
                $img_docer = time() . '_' . 'up' . '_' . $anexo['name'];
                move_uploaded_file($anexo['tmp_name'], '../Ficheiros/Noticias/anexos/' . $img_docer);
                if ($img_docer == NULL) {
                    echo -8;
                    exit;
                }
            }
        }

        $sql_res = $crud->update('tb_noticias', 'assunto=?,descricao=?,anexo=?,fk_user_up=? where noticias_id=?', array($titulo, $descr, $img_docer, $userlog, $notic_id));
        if ($sql_res == NULL) {
            echo $notic_id;
            exit;
        } else {
            echo -3;
            exit;
        }
    } elseif ((!empty($img_ant) && $newimg['name'] != NULL) && ($anexo['name'] == NULL && !empty($anexo_ant))) {
        if ($newimg['name'] != NULL) {
            $tipos = array('png', 'jpg', 'jpeg', 'gif');
            $newimg['name'] = $crudmy->tirarAcento_doc(($newimg['name']));
            $explode = explode('.', $newimg['name']);
            $tipo = strtolower(end($explode));
            $tamanho = 1024 * 1024 * 4;
            if ($newimg['size'] > $tamanho) {
                echo -6;
                exit;
            } else if (array_search($tipo, $tipos) === false) {
                echo -7;
                exit;
            } else {
                $img_new = time() . '_' . 'up' . '_' . $newimg['name'];
                move_uploaded_file($newimg['tmp_name'], '../Ficheiros/Noticias/imagens/' . $img_new);
                if ($img_new == NULL) {
                    echo -8;
                    exit;
                }
            }
        }
        $sql_res = $crud->update('tb_noticias', 'assunto=?,descricao=?,caminho=?,fk_user_up=? where noticias_id=?', array($titulo, $descr, $img_new, $userlog, $notic_id));
        if ($sql_res == NULL) {
            unlink("../Ficheiros/Noticias/imagens/" . $img_ant);
            echo $notic_id;
            exit;
        } else {
            echo -3;
            exit;
        }
    } elseif ((!empty($img_ant) && $newimg['name'] != NULL) && ($anexo['name'] != NULL && !empty($anexo_ant))) {
        if ($anexo['name'] != NULL) {
            $tipos = array('pdf', 'doc', 'docx');
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
                $img_docer = time() . '_' . 'up' . '_' . $anexo['name'];
                move_uploaded_file($anexo['tmp_name'], '../Ficheiros/Noticias/anexos/' . $img_docer);
                if ($img_docer == NULL) {
                    echo -8;
                    exit;
                }
            }
        }
        if ($newimg['name'] != NULL) {
            $tipos = array('png', 'jpg', 'jpeg', 'gif');
            $newimg['name'] = $crudmy->tirarAcento_doc(($newimg['name']));
            $explode = explode('.', $newimg['name']);
            $tipo = strtolower(end($explode));
            $tamanho = 1024 * 1024 * 4;
            if ($newimg['size'] > $tamanho) {
                echo -6;
                exit;
            } else if (array_search($tipo, $tipos) === false) {
                echo -7;
                exit;
            } else {
                $img_new = time() . '_' . 'up' . '_' . $newimg['name'];
                move_uploaded_file($newimg['tmp_name'], '../Ficheiros/Noticias/imagens/' . $img_new);
                if ($img_new == NULL) {
                    echo -8;
                    exit;
                }
            }
        }
        $sql_res = $crud->update('tb_noticias', 'assunto=?,descricao=?,caminho=?,anexo=?,fk_user_up=? where noticias_id=?', array($titulo, $descr, $img_new, $img_docer, $userlog, $notic_id));
        if ($sql_res == NULL) {
            unlink("../Ficheiros/Noticias/imagens/" . $img_ant);
            unlink("../Ficheiros/Noticias/anexos/" . $anexo_ant);
            echo $notic_id;
            exit;
        } else {
            echo -3;
            exit;
        }
    } elseif ((!empty($img_ant) && $newimg['name'] == NULL) && ($anexo['name'] != NULL && !empty($anexo_ant))) {
        if ($anexo['name'] != NULL) {
            $tipos = array('pdf', 'doc', 'docx');
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
                $img_docer = time() . '_' . 'up' . '_' . $anexo['name'];
                move_uploaded_file($anexo['tmp_name'], '../Ficheiros/Noticias/anexos/' . $img_docer);
                if ($img_docer == NULL) {
                    echo -8;
                    exit;
                }
            }
        }
        $sql_res = $crud->update('tb_noticias', 'assunto=?,descricao=?,anexo=?,fk_user_up=? where noticias_id=?', array($titulo, $descr, $img_docer, $userlog, $notic_id));
        if ($sql_res == NULL) {
            unlink("../Ficheiros/Noticias/anexos/" . $anexo_ant);
            echo $notic_id;
            exit;
        } else {
            echo -3;
            exit;
        }
    } else {
        $sql_res = $crud->update('tb_noticias', 'assunto=?,descricao=?,fk_user_up=? where noticias_id=?', array($titulo, $descr, $userlog, $notic_id));
        if ($sql_res == NULL) {
            echo $notic_id;
            exit;
        } else {
            echo -3;
            exit;
        }
    }
}