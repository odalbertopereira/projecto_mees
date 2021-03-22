<?php

class AlterSenha {

    private $veml, $vsh, $vsnv, $cpt, $crud, $codigo, $codigo_cont, $senha, $senhanova, $log, $dds, $senha_ant, $senhatest;

    public function setAlterSenha($email, $senha, $senhanova) {
        $this->veml = new ValidaEmail;
        $this->vsh = new ValidaSenha;
        $this->vsnv = new ValidaSenha;
//        $this->cpt = new Cripto;
        $this->crud = new CRUD;
        $this->codigo = $this->veml->setValidaEmail($email);
        $this->senha = $this->vsh->setValidaSenha($senha);
        $this->senhanova = $this->vsnv->setValidaSenhaNova($senhanova);

        $this->senha_ant = $this->crud->select('senha_user', 'tb_usuario', 'WHERE email_user=? && senha_user=?', array($this->codigo, $this->senha));
        $this->senha_ant = $this->senha_ant->fetch(PDO::FETCH_ASSOC);
        $this->senhatest = $this->senha_ant['senha_user'];

        $this->codigo_cont = $this->crud->select('count(email_user)', 'tb_usuario', 'WHERE  email_user=?', array($this->codigo));
        $this->codigo_cont = $this->codigo_cont->fetchColumn();
        //echo $this->cpt;

        if ($this->codigo <> $email) {
            return $this->codigo;
        } else if ($this->senha <> $senha) {
            return $this->senha;
        } else if ($this->senhanova <> $senhanova) {
            return $this->senhanova;
        } else if ($this->senhatest == '12345678#') {
            if ($this->codigo_cont > 0) {
                $this->log = $this->senhanova == $senhanova ?
                        $this->crud->update('tb_usuario', 'senha_user=? WHERE  email_user=?', array($this->senhanova, $this->codigo)) : FALSE;
            } else {
                return 'Não existe o Usuario digitado';
            }
        } else if ($this->senhanova == '12345678#') {
            return 'A senha Nova não pode ser igual a Antiga!';
        } else {
            if ($this->codigo_cont > 0) {
                $this->log = $this->senhanova == $senhanova ?
                        $this->crud->update('tb_usuario', 'senha_user=? WHERE email_user=?', array($this->senhanova, $this->codigo)) : FALSE;
            } else {
                return 'Não existe o Usuario digitado';
            }
        }
    }

}
