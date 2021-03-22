<?php

//include_once './TXT/leis_basico.txt';
function carregar_leisbasico($campo) {

    switch ($campo) {
        case 1:
            $arquivo = "./TXT/leis_basico.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                echo utf8_encode($linha . '<br>');
            }
            fclose($abrir_arq);break;
        case 2:
            $arquivo = "./TXT/leis_basico_1.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                echo ($linha . '<br>');
            }
            fclose($abrir_arq);break;
        case 3:
            $arquivo = "./TXT/leis_basico_2.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                echo ($linha . '<br>');
            }
            fclose($abrir_arq);break;
        case 4:
            $arquivo = "./TXT/leis_basico_3.txt";
            $abrir_arq = fopen($arquivo, 'r');
            while (!feof($abrir_arq)) {
                $linha = fgets($abrir_arq, 1024);
                echo ($linha . '<br>');
            }
            fclose($abrir_arq);break;

        default:
            break;
    }
}
