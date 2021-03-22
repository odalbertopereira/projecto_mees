<style>
    #slider-container{
        display: none;
    }

</style>
<div id="" class="col-md-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7484716733393!2d6.726722814748423!3d0.33903206408337405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10766a60b103cc41%3A0x8a2a7e9b51cb5a7d!2sMinist%C3%A9rio+da+Educacao!5e0!3m2!1spt-PT!2sst!4v1566557135426!5m2!1spt-PT!2sst" width="1700" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
            <h2 class="mb-sm mt-sm"><strong>Entre em contato com as direcções</strong></h2>
            <form id="contactForm" name="contactForm"  method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Seu nome *</label>
                            <input type="text" value="" data-msg-required="Informe seu nome." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Seu endereço de email *</label>
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
                            <label>Qual a sua direcção?*</label>
                            <select class="form-control" name="" id="">
                                <option value=""></option>
                                <option value="Gabinete de Ministro">Gabinete de Ministro</option>
                                <option value="Conselho Nacional da Educação">Conselho Nacional da Educação</option>
                                <option value="Conselho Nacional de Ensino Superior e Ciência">Conselho Nacional de Ensino Superior e Ciência</option>
                                <option value="Direção  de Planeamento e Inovação Educativa (DPIE)">Direção  de Planeamento e Inovação Educativa (DPIE)</option>
                                <option value="Direção Administrativa e Financeira (DAF)">Direção Administrativa e Financeira (DAF)</option>
                                <option value="Inspeção Geral da Educação e Supervisão Pedagógica (IGES)">Inspeção Geral da Educação e Supervisão Pedagógica (IGES)</option>
                                <option value="Direção  do Ensino Superior e Ciência (DESC)">Direção  do Ensino Superior e Ciência (DGESC)</option>
                                <option value="Direção  de Administração Escolar (DAE)">Direção de Administração Escolar (DAE)</option>
                                <option value="Direção do Ensino Secundário (DES)">Direção do Ensino Secundário (DES)</option>
                                <option value="Direção de Ensino Básico(DEB)">Direção de Ensino Básico(DEB)</option>
                                <option value="Direção da Educação Pré-Escolar (DEPE)">Direção da Educação Pré-Escolar (DEPE)</option>
                                <option value="Direção do Ensino Técnico e Profissional e da Educação de Jovens e Adultos(DETPEJA)">Direção do Ensino Técnico e Profissional e da Educação de Jovens e Adultos(DETPEJA)</option>
<!--                                <option value="Direção Geral de Cultura (DGC)">Direção Geral de Cultura (DGC)</option>
                                <option value="Delegação Zona Centro (Distrito de Água Grande e Mé-Zochi) (DZC)">Delegação Zona Centro (Distrito de Água Grande e Mé-Zochi) (DZC)</option>
                                <option value="Delegação Regional do Príncipe (DRP)">Delegação Regional do Príncipe (DRP)</option>
                                <option value="Delegação Zona Sul (Distrito de Cantagalo e Caué) (DZS)">Delegação Zona Sul (Distrito de Cantagalo e Caué) (DZS)</option>
                                <option value="Delegação Zona Norte (Distrito de Lobata e Lembá) (DZN)">Delegação Zona Norte (Distrito de Lobata e Lembá) (DZN)</option>-->
                                <option value="Universidade de São Tomé e Príncipe (USTP)">Universidade de São Tomé e Príncipe (USTP)</option>
                                <option value="Centro de Excelência de Ciência e Tecnologia (CECT)">Centro de Excelência de Ciência e Tecnologia (CECT)</option>
                                <option value="Instituto Superior de Educação e Comunicação (ISEC)">Instituto Superior de Educação e Comunicação (ISEC)</option>
                                <option value="Programa Nacional para a Alimentação e Segurança Escolar (PNASE)">Programa Nacional para a Alimentação e Segurança Escolar (PNASE)</option>
                                <!--<option value="Fundo Nacional para o Desenvolvimento da Educação (FNDE)">Fundo Nacional para o Desenvolvimento da Educação (FNDE)</option>-->
                                <!--<option value="Biblioteca Nacional (BN)">Biblioteca Nacional (BN)</option>-->
                                <!--<option value="Arquivo Histórico de São Tomé e Príncipe (AHSTP)">Arquivo Histórico de São Tomé e Príncipe (AHSTP)</option>-->
<!--                                <option value="Casa da Cultura (CC)">Casa da Cultura (CC)</option>
                                <option value="Fundo Nacional de Desenvolvimento Cultural (FNDC)">Fundo Nacional de Desenvolvimento Cultural (FNDC)</option>
                                <option value="Comissão Nacional da UNESCO (CNU)">Comissão Nacional da UNESCO (CNU)</option>-->
                                <option value="Outra">Outra</option>
                            </select>
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
                <!--<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href=" info@mecc.gov.st"> info@mecc.gov.st</a></li>-->
            </ul>
            <hr>
        </div>
    </div>
</div>


