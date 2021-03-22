<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Administração | MP</title>
        <!--Favicon-->
        <link rel="shortcut icon" href="resources/img/faviconMP.png" type="image/x-icon">
        <link href="resources/css/bootstrap.min.css" rel="stylesheet">
        <link href="resources/font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="resources/css/animate.css" rel="stylesheet">
        <link href="resources/css/style.css" rel="stylesheet">
        <link href="resources/css/login.css" rel="stylesheet">

    </head>

    <body class="gray-bg res" id="corpo">
        <div class="loginColumns animated fadeInDown">
            <div class="row">

                <div class="col-md-6" id="fundo_descr">
                    <h2 class="font-bold">Procuradoria Geral da República  - MP</h2>

                    <p>
                        A Procuradoria Geral da República tem como objectivo.......
                    </p>

                    <p>
                        Crime é o comportamento que viola a lei e que, como tal, é punido com uma pena..
                    </p>

                    <p>
                        <small>Existem penas de diversas espécies, como a admoestação, a prestação de trabalho a favor da comunidade, a multa (convertível em prisão alternativa em certos casos), a prisão (cuja execução pode ser suspensa ou ser substituída por multa em certos casos), existindo, também, penas acessórias (p. ex. proibição de conduzir veículos motorizados), aplicáveis a certos tipos de crime (p. ex., a condução em estado de embriaguez).</small>
                    </p>

                </div>
                <div class="col-md-6">
                    <div class="ibox-content">
                        <form id="formLogin" name="formLogin" class="m-t" role="form" action="javascript:void(0)">
                            <div class="form-group">
                                <input type="email" id="useremail" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" id="csenha" class="form-control" placeholder="Senha" required="">
                            </div>
                            <input type="button" class="btn btn-primary block full-width m-b" onclick="fctLogar();" value="Logar">

                            <a href="#"><small>Alterar senha?</small></a>
                            <span id="spanL"></span>
                        </form>
                        <p class="m-t">
                            <small>Procuradoria Geral da República &copy; 2020</small>
                        </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    Copyright MP
                </div>
                <div class="col-md-6 text-right">
                    <small>© 2020</small>
                </div>
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="resources/js/jquery-3.1.1.min.js"></script>
        <script src="resources/js/popper.min.js"></script>
        <script src="resources/js/bootstrap.js"></script>
        <script type="text/javascript" src="require/js/login.js"></script>
    </body>
</html>
