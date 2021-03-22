<?php

class Cripto {

    public function setCripto($param) {

        return (md5($param));
//        return hash('whirlpool', hash('sha384', sha1(md5(hash('sha256', hash('sha512', $param))))));
    }

}

#$_cripto=md5($param);
#$_cripto=sha1(md5($param));
#$_cripto=hash('sha256',$param);
#$_cripto=hash('sha384',sha1(md5(hash('sha256',hash('sha512',$param)))));
#$_cripto=hash('sha512',$param);

//$cpt=new Cripto;
//var_dump($cpt->setCripto('bandido@ad#123*'));
//var_dump($cpt->setCripto('mees@covid19#'));