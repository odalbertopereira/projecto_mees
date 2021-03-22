<?php

class ValidaSenha{
    public function setValidaSenha($pass)
    {
        if(empty($pass)){
            return ' Informe a Senha';
        }elseif (strrchr($pass,' ') ){
            return 'Senha Inválida!  A sua senha não deve conter espaço.';
        }elseif (!preg_match('/^[0-9a-z\.\-\_\*\#\$\@&]{8,20}$/i',$pass)){
            return 'Senha Inválida!';
        }  else{
            return $pass;
        }
    }
    public function setValidaSenhaNova($pass)
    {
        if(empty($pass)){
            return ' Informe a Nova Senha';
        }elseif (strrchr($pass,' ') ){
            return 'Senha Inválida!  A sua senha não deve conter espaço.';
        }elseif (!preg_match('/^[0-9a-z\.\-\_\*\#\$\@]{8,20}$/i',$pass)){
            return 'Senha Inválida! Este campo só aceita letras números e os seguintes caracteres(. - _ * # $ @)';
        }  else{
            return $pass;
        }
    }
}