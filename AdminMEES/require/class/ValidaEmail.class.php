<?php


class ValidaEmail {

    public function setValidaEmail($email) {
#Verificar as extenções existentes
        $ext = array('.com', '.br', '.net', '.gov', 'org', '.tv', '.pt', '.st');
#-----------
        #return strlen($email);
        #Verificar se campo vasio
        if (empty($email)) {
            return ' Informe o e-mail';
            #Verificar os caracteres
        } elseif (!preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\.\-]+\.[a-z]{2,3}$/i', $email)) {
            return 'E-mail Invalidado';
            #Verificar se as  extenções existem
        } elseif (!in_array(strrchr($email, '.'), $ext)) {
            return 'Extenção incorrecta';
        } else {
            return $email;
        }
    }

}
