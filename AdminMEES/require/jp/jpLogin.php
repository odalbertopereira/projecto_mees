<?php

require_once "../class/CRUD.class.php";
$lgn=new Login;
print $lgn ->setLogin($_POST['usuario'],$_POST['senha']);