<?php
include 'envia.php';
?>
<html>
    <head>
        <meta charset="utf8">
        <title>Formulário de contato</title>

        <!-- Aqui adiciona o script do ReCaptcha -->
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <link rel="stylesheet" href="style.css">
        <style>
            body{
                margin: 20px 0;
                font-family: Arial,sans-serif;
                font-size: 12px;
            }
            label{
                display:block;
                margin-top:15px;
            }
            input{
                display:block;
                height:40px;
                border:1px solid #e5e5e5;
                background:#f0f0f0;
                padding:10px;
                margin-top: 5px;
                width: 100%;
            }
            .container{
                width: 960px;
                margin:0 auto;
            }
            .g-recaptcha{
                margin-top:15px;
            }
            .send{
                background: #46ac00;
                color: #fff;
                border: 0px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Este é um teste de formulário de contato</h1>
            <form method="POST" action="formulario-contato.php">
                <label>Digite seu nome:
                    <input type="text" name="nome" value="" placeholder="ex: João" required>
                </label>
                <label>Digite seu e-mail:
                    <input type="email" name="email" value="" placeholder="ex: joaoclb@gmail.com" required>
                </label>
                <label>Digite o assunto:
                    <input type="text" name="assunto" value="" placeholder="ex: orçamento" required>
                </label>
                <label>Digite sua mensagem:
                    <input type="text" name="msg" value="" placeholder="Digite sua mensagem aqui" required>
                </label>

                <!-- Div do ReCaptcha foi adicionado no final do formulário -->
                <div class="g-recaptcha" data-sitekey="6LdyX7kUAAAAAP6ruVVUEwbeZdOcnScWsBkP9zNY"></div>

                <input class="send" type="submit">
            </form>
        </div>
    </body>
</html>