<?php

require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();

$codigo = $crudmy->limpascript($_POST['codigo']);
$coddescr = base64_decode($codigo);
$sql_res = $crudmy->select_function('FUNC_UPDATE_ESTADO_VIDEO_AULAS', "'$coddescr'");
echo $sql_res;
unset($crud);
unset($crudmy);


