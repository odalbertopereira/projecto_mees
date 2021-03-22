<?php

//Recupera os dados enviados pelo formulário
$GetPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//mensagem de erro
//ini_set('display_startup_errors', 1);
//ini_set('display_errors', 1);
//Variáveis locais
//$Erro = true;
$Nome = $GetPost['tnome'];
$email = $GetPost['temail'];
$mensagem = $GetPost['tmessage'];
//$emaildestinatario = 'assisneves_10@hotmail.com';
$emaildestinatario = 'paciencia63@gmail.com';
$assunto = 'MECC-CASAPROFESSOR';

//include_once '../contact_v2.php';
//Incluir a classe PHPMailer
include_once '../PHPMailer/class.smtp.php';
include_once '../PHPMailer/class.phpmailer.php';

//Variáveis locais
$Erro = true;
$NomeS = "SITE CANDIDATURA PROFESSOR";
//            $Email = $GetPost['email'];
//Incluir a classe PHPMailer
//include_once '../PHPMailer/class.smtp.php';
//include_once '../PHPMailer/class.phpmailer.php';
//Enviando o e-mail utilizando a classe PHPMail
$Mailer = new PHPMailer;
$Mailer->CharSet = "utf8";
//$Mailer->SMTPDebug = 3;
$Mailer->IsSMTP();
$Mailer->Host = "smtp.gmail.com";
$Mailer->SMTPAuth = true;
$Mailer->Username = "joao.sacramento@mecc.gov.st";
$Mailer->Password = "Jecileyda_123*";
$Mailer->SMTPSecure = "tls";
//$Mailer->SMTPSecure = "STARTTLS";
$Mailer->Port = 587;
$Mailer->FromName = "{$Nome}";
$Mailer->AddAddress($emaildestinatario);
$Mailer->From = $email;
$Mailer->IsHTML(true);
$Mailer->Subject = "{$assunto}";
$Mailer->Body = "{$mensagem}" . "<br><br>" . "{$email}";

//funcao co coptcha
if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}
// Se nenhum valor foi recebido, o usuário não realizou o captcha
if (!$captcha_data) {
    echo "<script language='javascript' type='text/javascript'>$('#cform #spanL').html('<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><i class='fa fa-desktop'></i><strong>Por Favor</strong> Formato de Foto e Copia de Documento invalido<a href='#' class='alert-link'>, EX de foto: png, jpg e jpeg, EX copia de documento: pdf, jpeg, png, jpg e jpeg!</a></div>');</script>";
    exit;
    
}
//biblioteca para o captcha
require_once "../recaptchalib.php";
// sua chave secreta
$secret = "6Lea2DYUAAAAALBAWcTJerP9ddk_bzpXMyTDKY33";

// resposta vazia
$response = null;

// verifique a chave secreta
$reCaptcha = new ReCaptcha($secret);

// se submetido, verifique a resposta
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]
    );
}

if (($response != null && $response->success) && $Mailer->Send()) {
    $Erro = false;

    if (!$Erro) {
        // var_dump($Erro);
        echo"<script language='javascript' type='text/javascript'>alert(' Obrigado pela sua colaboração!');window.location.href='../contact_v2.php'</script>";
        print $mensagen = "Mensagem enviada com sucesso!";
    } else {
        $mensagen = "A mensagem não pode ser enviada";
    }
    exit;
}

