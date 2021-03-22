<?php
$crud = new CRUD();
?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="./Ficheiros/PhotoUser/<?php echo $crud->retornar_foto_userlog($_SESSION['logadomees']['user_id']); ?>" style="width: 50px; height: 50px; border-radius: 25px;"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold"><?php echo $_SESSION['logadomees']['user_name']; ?></span>
                        <span class="text-muted text-xs block">Programador <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="">Perfil</a></li>
                        <!--                        <li><a class="dropdown-item" href="">Contacts</a></li>
                                                <li><a class="dropdown-item" href="">Mailbox</a></li>-->
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="sair.php">Sair</a></li>
                    </ul>
                </div>
                <div class="logo-element" title="Ministério da Educação e Ensino Superior">
                    MEES
                </div>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="index.php">Home</a></li>
                </ul>
            </li>
<!--            <li>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Permissão</span></a>
            </li>-->
            <li>
                <a href="#"><i class="fa fa-user-md"></i> <span class="nav-label">Usuario</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="?pag=adduser">Gerir Usuario</a></li>
                    <li><a href="?pag=userlist">Listar Usuario</a></li>
                </ul>
            </li>
<!--            <li>
                <a href=""><i class="fa fa-envelope"></i> <span class="nav-label">Notícias </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="?pag=noticias">Gerir Notícias</a></li>
                    <li><a href="">Listar Notícias</a></li>
                </ul>
            </li>-->
            <li>
                <a href=""><i class="fa fa-envelope"></i> <span class="nav-label">Videos Aulas</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="?pag=videos">Gerir Videos Aulas</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-envelope"></i> <span class="nav-label">Slides </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="?pag=slids">Gerir Slides</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-envelope"></i> <span class="nav-label">GFCE </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="?pag=oferta">Oferta Formativa</a></li>
                    <li><a href="?pag="></a></li>
                    <li><a href="?pag="></a></li>
                    <li><a href="?pag="></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>