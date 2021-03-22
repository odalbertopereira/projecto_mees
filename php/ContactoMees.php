<?php

//define('SITE_KEY', '6Le4W7kUAAAAAEf47cCDg7X0-w6y-9UgcW2s3OVn');
define('SECRET_KEY', '6LfmXbkUAAAAALkequc-y-zPOKFStbSS6MKjebzg');
require_once '../config.php';

$nome = (limpascript($_POST['name']));
$email = (limpascript($_POST['email']));
$assunto = (limpascript($_POST['subject']));
$mensagem = (limpascript($_POST['message']));


//Variáveis locais 
//destinatario oonde o email sera encameado ou as direções escolhido no formulario
$emaildestinatario = 'eduticeducacao@gmail.com';
$Erro = true;
$NomeS = "SITE CANDIDATURA PROFESSOR";
//Incluir a classe PHPMailer
include_once '../PHPMailer/class.smtp.php';
include_once '../PHPMailer/class.phpmailer.php';
$Mailer = new PHPMailer;
$Mailer->CharSet = "utf8";
//$Mailer->SMTPDebug = 3;
$Mailer->IsSMTP();
$Mailer->Host = "smtp.gmail.com";
$Mailer->SMTPAuth = true;
//$Mailer->Username = "eduticeducacao@gmail.com";
//$Mailer->Password = "edutic#2019@$";
$Mailer->Username = "joao.sacramento@mecc.gov.st";
$Mailer->Password = "Jecileyda_123*";
$Mailer->SMTPSecure = "tls";
//$Mailer->SMTPSecure = "STARTTLS";
$Mailer->Port = 587;
$Mailer->FromName = "{$nome}";
$Mailer->AddAddress("{$emaildestinatario}", "{$nome}");
$Mailer->From = $email;
$Mailer->IsHTML(true);
$Mailer->Subject = "{$assunto}";
//$Mailer->Body = "<div><p> {mensagem} </p></div>";

$Mailer->Body = " <div dir='ltr' style='border:1px solid #f0f0f0;max-width:650px;font-family:Arial,sans-serif;color:#000000'>
                <div style='background-color:#f5f5f5;padding:10px 12px'>
                    <table cellpadding='0' cellspacing='0' style='width:100%'>
                        <tbody>
                            <tr>
                                <td style='width:50%'>
                                    <span style='font:20px/24px arial;color:#333333'>
                                        <a href='#' style='text-decoration:none;color:#000000'>
                                            CONTACTO GERAL-MEES
                                        </a>
                                    </span>
                                </td>
                                <td style='text-align:right;width:50%'>
                                    <span style='font:20px/24px arial'>
                                        <a style='color:#dd4b39;text-decoration:none' href='#' >
                                            ÁREA DE RESPOSTA DO MEES
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div style='margin:30px 30px 30px 30px;line-height:21px'>
                    <span style='font-size:13px;color:#000000;font-weight:bold'>
                        Assunto da Mensagem :</span>
                    <div>
                        <p style='font-size:13px;color:#666666;padding:10px 10px;background-color:#fafafa;border:1px solid #dddddd;margin-top:0px'>
                             {$assunto}
                        </p>
                    </div>
                </div>
                <div style='margin:30px 30px 30px 30px;line-height:21px'>
                    <span style='font-size:13px;color:#000000;font-weight:bold'>
                        Está recebendo este e-mail porque:
                    </span>
                    <ul style='font-size:13px;color:#333333'>
                        <p class='justificar_texto'>
                            {$mensagem}
                        </p>
                    </ul>
                </div>

                <div style='background-color:#f5f5f5;padding:5px 12px'>
                    <table cellpadding='0' cellspacing='0' style='width:100%'>
                        <tbody>
                            <tr>
                                <td>Remetente-> {$nome} </td>
                                <td>Email-> {$email}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>";

if ($Mailer->Send()) {
    $Erro = false;
    if (!$Erro) {
        echo 1;
    } else {
        echo -1;
    }
    exit;
}


