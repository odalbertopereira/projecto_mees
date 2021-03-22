<?php

// Connexion à la base de données
require_once('bdd.php');
//echo $_POST['title'];
if (isset($_POST['texto']) && isset($_POST['idu'])){
	$id_user = (int)$_GET['idu'];
        $data = date('Y-m-d H:i:s');
	$texto = $_POST['texto'];
	

	$sql = "INSERT INTO tb_notificacoes (id_user,text, status, data) VALUES ('$id_user', $texto, '0', '$data')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);
