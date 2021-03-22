<?php

require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();

$codigo = $crudmy->limpascript($_POST['codigo']);
$coddescr = base64_decode($codigo);
$senha_padrao = 'b5256606f36ef30462508cb7d2c58679441f3ae91d7649a0957f0089c3167f1392ea5f426ad7581232cdc57b831ee113b4f805d52f3507d788cd5109d01aa0c2';
$sql_res = $crudmy->select_function('FUNC_PASS_USER', "'$senha_padrao','$coddescr'");
if ($sql_res > 0) {
    echo $sql_res;
    $crud = NULL;
    $crudmy = NULL;
} else {
    echo $sql_res;
    $crud = NULL;
    $crudmy = NULL;
}



