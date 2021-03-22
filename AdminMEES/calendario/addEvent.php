<?php

// Connexion à la base de données
require_once '../require/class/CRUD.class.php';
$crud = new CRUD();
$crudmy = new CRUDMYSQLI();
if (isset($_POST['title']) && isset($_POST['color'])) {

    $title = $crudmy->limpascript($_POST['title']);
    $start = $_POST['start'];
    $end = $_POST['end'];
    $color = $_POST['color'];

//    $sql = "INSERT INTO tb_eventos(title, start, end, color) values ('$title', '$start', '$end', '$color')";
    $sql = $crud->insert('tb_eventos', 'title=?, start=?, end=?, color=?', array($title, $start, $end, $color));
    if ($sql > 0) {
        echo $sql;
    }
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
