<?php

session_start();
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();
if (isset($_SESSION['logadomp']['user_id']) == 0) {
//    require_once '../login.php';
    header("Location: ../login.php");
} else {
    if (isset($_REQUEST['codigo']) && $_REQUEST['codigo'] != null) {
        $codig = base64_decode($_REQUEST['codigo']);
        $sql = $crud->select('noticias_id,anexo', 'tb_noticias', 'WHERE noticias_id=?', array($codig));
        while ($lin = $sql->fetch(PDO::FETCH_ASSOC)) {
            $ficheiro = $lin['anexo'];
        }
        $arquivo = "../Ficheiros/Noticias/anexos/{$ficheiro}";
        header('content-type: application/pdf');
        readfile($arquivo);
        $crud = NULL;
        $crudmy = NULL;
    }
}


