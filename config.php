<?php

$conne = mysqli_connect("localhost", "root", "", "id13375646_video_aula") or die("Falha ao selecionar o banco");
//$conne = mysqli_connect("localhost", "id13375646_video_aulamess", "7s7bT/b*6-E+Q?lI", "id13375646_video_aula") or die("Falha ao selecionar o banco");

function fechar_conexao_php_mysql($conn) {
    mysqli_close($conn);
}

function carregar_leisbasico($campo) {

    switch ($campo) {
        case 1:
            $arquivo = "./TXT/leis_basico.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                echo utf8_encode($linha . '<br>');
            }
            fclose($abrir_arq);
            break;
        case 2:
            $arquivo = "./TXT/leis_basico_1.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                echo ($linha . '<br>');
            }
            fclose($abrir_arq);
            break;
        case 3:
            $arquivo = "./TXT/leis_basico_2.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                echo ($linha . '<br>');
            }
            fclose($abrir_arq);
            break;
        case 4:
            $arquivo = "./TXT/leis_basico_3.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                echo ($linha . '<br>');
            }
            fclose($abrir_arq);
            break;
        case 5:
            $arquivo = "./TXT/importancia_forma_desc.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                $linha = preg_replace("/&([a-z])[a-z]+;/i", "$1", $linha);
                echo $linha . '<br>';
            }
            fclose($abrir_arq);
            break;
        case 6:
            $arquivo = "./TXT/bolsas_estudos_interna_desc.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                $linha = preg_replace("/&([a-z])[a-z]+;/i", "$1", $linha);
                echo $linha . '<br>';
            }
            fclose($abrir_arq);
            break;
        case 7:
            $arquivo = "./TXT/bolsas_estudos_externa_desc.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                $linha = preg_replace("/&([a-z])[a-z]+;/i", "$1", $linha);
                echo $linha . '<br>';
            }
            fclose($abrir_arq);
            break;
        case 8:
            $arquivo = "./TXT/bolsas_estudos_vagas_desc.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                $linha = preg_replace("/&([a-z])[a-z]+;/i", "$1", $linha);
                echo $linha . '<br>';
            }
            fclose($abrir_arq);
            break;
        case 9:
            $arquivo = "./TXT/cursos_prioritarios_desc.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                $linha = preg_replace("/&([a-z])[a-z]+;/i", "$1", $linha);
                echo $linha . '<br>';
            }
            fclose($abrir_arq);
            break;

        default:
            break;
    }
}

function tirarAcento_doc($texto) {
    // array com letras acentuadas
    $com_acento = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'ÿ', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'ÿ', 'Î', 'ÿ', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú', 'Ÿ',);
    // array com letras correspondentes ao array anterior, porém sem acento
    $sem_acento = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U', 'Y',);
    // procuramos no nosso texto qualquer caractere do primeiro array e substituímos pelo seu correspondente presente no 2º array
    $final = str_replace($com_acento, $sem_acento, $texto);
    // array com pontuação e acentos
    $com_pontuacao = array('´', '`', '¨', '^', '~');
//    // array com substitutos para o array anterior
    $sem_pontuacao = array('', '', '', '', '', '_', '_');
//    // procuramos no nosso texto qualquer caractere do primeiro array e substituímos pelo seu correspondente presente no 2º array
    $final1 = str_replace($com_pontuacao, $sem_pontuacao, $final);
    // retornamos a variável com nosso texto sem pontuações, acentos e letras acentuadas
    return $final1;
}

function carregar_quemsomos($gov) { 
    $connectd = mysqli_connect('localhost', 'id13375646_video_aulamess', '7s7bT/b*6-E+Q?lI', 'id13375646_video_aula');
    $resultado = mysqli_query($connectd, "SELECT descricao FROM tb_quem_somos WHERE Estado = 'ACTIVO' AND fk_gov_quem_somos = '$gov'") or die("erro ao selecionar pessoa");
    $desig = "";
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $desig = utf8_encode($linha["descricao"]);
    }
    return $desig;
    fechar_conexao_php_mysql($connectd);
}

function limpascript($inputs) {
    global $conne;
//  impedi os script maliciosos de html para usuarios como hacker.
    $campo = mysqli_escape_string($conne, $inputs);
//    impedi os scripts maliciosos de javascript
    $campo = htmlspecialchars($campo);
    return $campo;
}
function limpascript1($inputs) {
    global $conne;
//  impedi os script maliciosos de html para usuarios como hacker.
    $campo = mysqli_escape_string($conne, $inputs);
//    impedi os scripts maliciosos de javascript
//    $campo = htmlspecialchars($campo);
    return $campo;
}
function obter_pessoa_noticia($id) {
    $connectd = mysqli_connect('localhost', 'root', '', 'id13375646_video_aula');
    $resultado = mysqli_query($connectd, "SELECT user_name FROM tb_usuario WHERE user_id = '$id'") or die("erro ao selecionar pessoa");
    $desig = "";
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $desig = utf8_encode($linha["user_name"]);
    }
    return $desig;
    fechar_conexao_php_mysql($connectd);
}
