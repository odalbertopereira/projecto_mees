<?php

/**
 * Created by PhpStorm.
 * User: sander
 * Date: 17/02/2017
 * Time: 02:47
 */
function __autoload($class) {
    require_once"{$class}.class.php";
}

class CRUD extends ConDB {

    private $query;

    private function prepExec($prep, $exec) {
        $this->query = $this->getConn()->prepare($prep);
        $this->query->execute($exec);
    }

    public function insert($table, $cond, $exec) {
        $this->prepExec('INSERT INTO ' . $table . ' SET ' . $cond . ' ', $exec);
        return $this->getConn()->lastInsertId();
    }

    public function select($fields, $table, $cond, $exec) {
        $this->prepExec('SELECT ' . $fields . ' FROM ' . $table . ' ' . $cond . ' ', $exec);
        return $this->query;
    }

    public function update($table, $cond, $exec) {
        $this->prepExec(' UPDATE ' . $table . ' SET ' . $cond . ' ', $exec);
        #return $this->query;
    }

    public function Delete($table, $cond, $exec) {
        $this->prepExec(' DELETE FROM ' . $table . ' ' . $cond . ' ', $exec);
    }

    public function cont_tbusuario_all() {
        global $crud;
        $sql = $crud->contar_dados_pdo('user_id', 'tb_usuario', "");
        unset($crud);
        return $sql;
    }

    public function cont_tbnoticia_all() {
        global $crud;
        $sql = $crud->contar_dados_pdo('noticias_id', 'tb_noticias', "");
        unset($crud);
        return $sql;
    }

    public function retornar_nome_userlog($user) {
        global $crud;
        $resu_s = $crud->select('user_name', 'tb_usuario', ' WHERE user_id=?', array($user));
        $desig = "";
        while ($linha = $resu_s->fetch()) {
            $desig = ($linha["user_name"]);
        }
        unset($crud);
        return $desig;
    }

    public function retornar_foto_userlog($user) {
        global $crud;
        $resu_s = $crud->select('user_foto', 'tb_usuario', ' WHERE user_id=?', array($user));
        $desig = "";
        while ($linha = $resu_s->fetch()) {
            $desig = ($linha["user_foto"]);
        }
        unset($crud);
        return $desig;
    }

    public function contar_dados_pdo($valor_cont, $tabla_view, $cond) {
        $connectd = mysqli_connect("localhost", "root", "", "id13375646_video_aula") or die("Falha ao selecionar o banco");
        $sql = "SELECT COUNT(" . $valor_cont . ")" . ' FROM ' . $tabla_view . ' ' . $cond . ';';
        $sql_res = mysqli_query($connectd, $sql);
        $obj_sql = mysqli_fetch_assoc($sql_res);
        $rec_res = $obj_sql['COUNT(' . $valor_cont . ')'];
        unset($connectd);
        return $rec_res;
    }

}

class CRUDMYSQLI {

    public function select_function($nome_func, $fields) {
        $connectd = mysqli_connect("localhost", "root", "", "id13375646_video_aula") or die("Falha ao selecionar o banco");
        $sql_func = "SELECT " . $nome_func . '(' . $fields;
        $sql_func .= ')' . ' AS result';
        $query_func = mysqli_query($connectd, $sql_func) or die('Não Existe o paremtro passado no sistema' . mysqli_errno($connectd) . mysqli_error($connectd));
        $obj_sql = mysqli_fetch_object($query_func);
        $res_query = $obj_sql->result;
        unset($connectd);
        return $res_query;
    }

    function limpascript($inputs) {
        $connectd = mysqli_connect("localhost", "root", "", "id13375646_video_aula") or die("Falha ao selecionar o banco");
//  impedi os script maliciosos de html para usuarios como hacker.
        $campo = mysqli_escape_string($connectd, $inputs);
//  impedi os scripts maliciosos de javascript
        $campo = htmlspecialchars($campo);
        return $campo;
    }

    function tirarAcento_doc($texto) {
        // array com letras acentuadas
        $com_acento = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'ÿ', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'ÿ', 'Î', 'ÿ', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú', 'Ÿ',);
        // array com letras correspondentes ao array anterior, porém sem acento
        $sem_acento = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U', 'Y',);
        // procuramos no nosso texto qualquer caractere do primeiro array e substituímos pelo seu correspondente presente no 2º array
        $final = str_replace($com_acento, $sem_acento, $texto);
        // array com pontuação e acentos
        $com_pontuacao = array('´', '`', '¨', '^', '~', ' ', '-');
        // array com substitutos para o array anterior
        $sem_pontuacao = array('', '', '', '', '', '_', '_');
        // procuramos no nosso texto qualquer caractere do primeiro array e substituímos pelo seu correspondente presente no 2º array
        $final1 = str_replace($com_pontuacao, $sem_pontuacao, $final);
        // retornamos a variável com nosso texto sem pontuações, acentos e letras acentuadas
        return $final1;
    }

    function myarrfiles($tfiles) {
        $myarr = array();
        $mykon = count($tfiles['name']);
        $mykey = array_keys($tfiles);
        for ($i = 0; $i < $mykon; $i++) {
            foreach ($mykey as $key) {
                $myarr[$i][$key] = $tfiles[$key][$i];
            }
        }
        return $myarr;
    }

}
