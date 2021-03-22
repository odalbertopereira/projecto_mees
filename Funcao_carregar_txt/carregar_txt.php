<?php
//include '../TXT/leis_basico.txt';
$arquivo = "../TXT/leis_basico.txt";
$abrir_arq = fopen($arquivo, 'r');
while (!feof($abrir_arq)) {
    $linha = fgets($abrir_arq, 1024);
    echo utf8_encode($linha . '<br>');
}
fclose($abrir_arq);

