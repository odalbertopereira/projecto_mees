 <?php
/**
 * Created by PhpStorm.
 * User: sander
 * Date: 18/02/2017
 * Time: 06:12
 */

class  ValidaCodigo
{
    public  function  setValidaCodigo($codigo)
    {
         #return strlen($email);
 #Verificar se campo vasio
         if (empty($codigo) ) {
            return ' Informe o Usuario';
        }else{
        return $codigo;
    }

    }
}