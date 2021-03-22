<?php
//include_once '../Admin/Ficheiros/Estatistica/Boletins/';

$connected = mysqli_connect('192.168.1.14:3306', 'matabala', 'matabala', 'db_site_mees');

if (isset($_REQUEST['codigo']) && $_REQUEST['codigo'] != null) {
    $codig = base64_decode($_REQUEST['codigo']);
    $estra = mysqli_query($connected, "SELECT ID_BOLETIM,TITULO,CAMINHO,ANO_BOLETIM,FK_USER,FK_GOV,ESTADO,DT_REG FROM view_ver_boletim WHERE ID_BOLETIM = '$codig'");
    while ($lin = mysqli_fetch_assoc($estra)) {
        $ficheiro = $lin['CAMINHO'];
    }
    $arquivo = "../Admin/Ficheiros/Estatistica/Boletins/{$ficheiro}";
    header('content-type: application/pdf');
    readfile($arquivo);
    fechar_conexao_php_mysql($connected);
}