<?php
define('SITE_KEY', '6Le4W7kUAAAAAEf47cCDg7X0-w6y-9UgcW2s3OVn');
?>
<style>
    #slider-container{
        display: none;
    }

</style>
<div id="" class="col-md-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7484716733393!2d6.726722814748423!3d0.33903206408337405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10766a60b103cc41%3A0x8a2a7e9b51cb5a7d!2sMinist%C3%A9rio+da+Educacao!5e0!3m2!1spt-PT!2sst!4v1566557135426!5m2!1spt-PT!2sst" width="1869" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                <strong>Success!</strong> Your message has been sent to us.
            </div>
            <div class="alert alert-danger hidden mt-lg" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
                <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
            </div>
            <h2 class="mb-sm mt-sm"><strong>Entre em contato conosco</strong></h2>
            <form id="contactForm" name="contactForm"  method="POST" enctype="multipart/form-data" action="./php/ContactoMees.php">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Seu nome *</label>
                            <input type="text" value="" data-msg-required="Informe seu nome." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Seu endereço de email *</label> <strong></strong>
                            <input type="email" value="" data-msg-required="Entra com um email válido." data-msg-email="Entra com um email válido." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Assunto</label>
                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Mensagem *</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                </div>
<!--                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            recaptcha
                            <div class="g-recaptcha" data-sitekey="6LdyX7kUAAAAAP6ruVVUEwbeZdOcnScWsBkP9zNY"></div>
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col-md-12">
                        <input type="button" value="Enviar mensagem" id="enviar_sms" name="enviar_sms" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h4 class="heading-primary mt-lg">Entre em  <strong>contato</strong></h4>
            <p>Preencha este formulário se quiser solicitar serviço ou informações a Direcção de Tecnologia de Informação e Comunicação (Edutic) do Ministério da Educação e Ensino Superior da Republica democrática de São Tomé e Príncipe. Você será contactado o mais rapidamente possível. 
                Por favor, preencha todos os campos obrigatórios . Poderá nos ligar também para o Telefone 2222861.</p>
            <hr>
            <h4 class="heading-primary"><strong>Localização</strong></h4>
            <ul class="list list-icons list-icons-style-3 mt-xlg">
                <li><i class="fa fa-map-marker"></i> <strong>Endereço:</strong> Rua Samora Machel, Agua Grande</li>
                <li><i class="fa fa-phone"></i> <strong>Telefone:</strong> +239 2223366 / 2226412</li>
                <li><i class="fa fa-arrow-circle-o-right"></i> <strong>Email:</strong> <a href=" info@mecc.gov.st"> info@mecc.gov.st</a></li>
            </ul>
            <hr>

<!--            <div dir="ltr" style="border:1px solid #f0f0f0;max-width:650px;font-family:Arial,sans-serif;color:#000000">
                <div style="background-color:#f5f5f5;padding:10px 12px">
                    <table cellpadding="0" cellspacing="0" style="width:100%">
                        <tbody>
                            <tr>
                                <td style="width:50%">
                                    <span style="font:20px/24px arial;color:#333333">
                                        <a href="#" style="text-decoration:none;color:#000000">
                                            CONTACTO GERAL-MEES
                                        </a>
                                    </span>
                                </td>
                                <td style="text-align:right;width:50%">
                                    <span style="font:20px/24px arial">
                                        <a style="color:#dd4b39;text-decoration:none" href="#" >
                                            ÁREA DE RESPOSTA DO MEES
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div style="margin:30px 30px 30px 30px;line-height:21px">
                    <span style="font-size:13px;color:#000000;font-weight:bold">
                        Assunto da Mensagem :</span>
                    <div>
                        <p style="font-size:13px;color:#666666;padding:10px 10px;background-color:#fafafa;border:1px solid #dddddd;margin-top:0px">
                            recebe assunto
                        </p>
                    </div>
                </div>
                <div style="margin:30px 30px 30px 30px;line-height:21px">
                    <span style="font-size:13px;color:#000000;font-weight:bold">
                        Está recebendo este e-mail porque:
                    </span>
                    <ul style="font-size:13px;color:#333333">
                        <p class="justificar_texto">
                            Inscreveu-se pelo Portal dos Professores do Ministério da Educação, Cultura, Ciência e Comunicação.
                        
                            Inscreveu-se para uma vaga como Professor do Ministério da Educação, Cultura, Ciência e Comunicação.
                        </p>
                    </ul>
                </div>

                <div style="background-color:#f5f5f5;padding:5px 12px">
                    <table cellpadding="0" cellspacing="0" style="width:100%">
                        <tbody>
                            <tr>
                                <td>Remetente</td>
                                <td>Email </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>-->


        </div>
    </div>
</div>


