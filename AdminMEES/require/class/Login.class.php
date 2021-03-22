<?php

class Login {

    private $veml, $vsh, $cpt, $crud, $codigo, $senha, $log, $dds, $senha_ant, $senhatest, $senha_padrao;

    public function setLogin($email, $senha) {
        $this->veml = new ValidaEmail;
        $this->vsh = new ValidaSenha;
        $this->cpt = new Cripto;
        $this->crud = new CRUD;
        $this->codigo = $this->veml->setValidaEmail($email);
        $this->senha = $this->vsh->setValidaSenha($senha);
        $this->senha_padrao = '2925cc81ff4fca5a6c2ad7494a29a3af343ab0f3e1cc72454a50160a1e371ee9e5d61c4aa5f399d2020c41eaea03fbf47ac24fd8af194846d85cb63004c22444';
        $this->senha_ant = $this->crud->select('user_senha', 'tb_usuario', 'WHERE user_email=? && user_senha=? && user_estado=?', array($this->codigo, $this->cpt->setCripto($this->senha), 'ACTIVO'));
        $this->senha_ant = $this->senha_ant->fetch(PDO::FETCH_ASSOC);
        $this->senhatest = isset($this->senha_ant['user_senha']) ? $this->senha_ant['user_senha'] : '';
        
        if ($this->codigo <> $email) {
            return $this->codigo;
        } else if ($this->senha <> $senha) {
            return $this->senha;
        } else if ($this->senhatest != NULL && $this->senhatest === $this->senha_padrao) {
            return 'Por favor altera a sua senha';
        } else {
            $this->log = $this->senha == $senha ?
                    $this->crud->select('*', 'tb_usuario', 'WHERE user_email=? && user_senha=? && user_estado=?', array($this->codigo, $this->cpt->setCripto($this->senha), 'ACTIVO')) : FALSE;
            session_start();
            if ($this->log && $this->log->rowCount() > 0) {
                foreach ($this->log as $this->dds) {
                    $_SESSION['logadomees'] = $this->dds;
                    unset($this->log);
                }
            } else {
                return 'Acesso Negado!';
            }
        }
    }

}
