<?php

session_start();
// Connexion à la base de données
require_once('../calendario/bdd.php');

$pegarperf = isset($_SESSION['logado']['perfil_id']) ? $_SESSION['logado']['perfil_id'] : ('');
$connected = mysqli_connect('localhost', 'root', '', 'db_esup_dgesc');
$resultado = mysqli_query($connected, "SELECT designacaol FROM tb_perfil WHERE perfil_id = '$pegarperf'") or die("erro ao selecionar perfil");
while ($linha = mysqli_fetch_assoc($resultado)) {
    $desig = utf8_encode($linha["designacaol"]);
}
//echo $desig;
if (($desig == 'Admin')) {
//    echo 'Entreii ..';
    if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])) {
        $id = $_POST['Event'][0];
        $start = $_POST['Event'][1];
        $end = $_POST['Event'][2];
        $sql_up = "UPDATE eventos SET  start = '$start', end = '$end' WHERE id = $id ";
        $res = mysqli_query($connected, $sql_up);
        if ($res > 0) {
            echo 'OK';
        } else {
            echo '';
        }
    }
} else if (($desig == 'DGESC')) {
    if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])) {
        $id = $_POST['Event'][0];
        $start = $_POST['Event'][1];
        $end = $_POST['Event'][2];
        $sql_up = "UPDATE eventos SET  start = '$start', end = '$end' WHERE id = $id ";
        $res = mysqli_query($connected, $sql_up);
        if ($res > 0) {
            echo 'OK';
        } else {
            echo '';
        }
    }
}else{
    echo 'Não Tens permição para alterar!';
}



//$sth = $resultado->execute();
//if ($desig = 'IES') {
//    echo 'Execute não funcionou';
//} else {
//    var_dump($desig);
//}
 
//if (($sth == 'Admin')) {
//
//    if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])) {
//
//
//        $id = $_POST['Event'][0];
//        $start = $_POST['Event'][1];
//        $end = $_POST['Event'][2];
//
//        $sql = "UPDATE eventos SET  start = '$start', end = '$end' WHERE id = $id ";
//
//
//        $query = $bdd->prepare($sql);
//        if ($query == false) {
//            print_r($bdd->errorInfo());
//            die('Erreur prepare');
//        }
//        $sth = $query->execute();
//        if ($sth == false) {
//            print_r($query->errorInfo());
//            die('Erreur execute');
//        } else {
//            die('OK');
//        }
//    }
//} elseif (($sth == 'DGESC')) {
//
//    if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])) {
//
//
//        $id = $_POST['Event'][0];
//        $start = $_POST['Event'][1];
//        $end = $_POST['Event'][2];
//
//        $sql = "UPDATE eventos SET  start = '$start', end = '$end' WHERE id = $id ";
//
//
//        $query = $bdd->prepare($sql);
//        if ($query == false) {
//            print_r($bdd->errorInfo());
//            die('Erreur prepare');
//        }
//        $sth = $query->execute();
//        if ($sth == false) {
//            print_r($query->errorInfo());
//            die('Erreur execute');
//        } else {
//            die('OK');
//        }
//    }
//} else {
//    echo 'Não Tens permição para alterar!';
//}

    