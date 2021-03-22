<?php

require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$sql = $crud->select('id,title,color,start,end', 'tb_eventos', ' ORDER BY id', array());
$data = array();
while ($linha = $sql->fetch()) {
//    $data[] = $linha;
    array_push($data, array(
        'id' => $linha['id'],
        'title' => $linha['title'],
        'color' => $linha['color'],
        'start' => $linha['start'],
        'end' => $linha['end']));
}
//echo json_encode($data);
echo json_encode($data);
?>
