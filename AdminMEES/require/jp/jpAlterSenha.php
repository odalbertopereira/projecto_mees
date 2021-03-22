<?php

require_once "../class/CRUD.class.php";
$lgn = new AlterSenha;
print $lgn->setAlterSenha($_POST['usuario'], $_POST['senhaantiga'], $_POST['senhanova']);

