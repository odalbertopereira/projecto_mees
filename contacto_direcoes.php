<style>
    .justificar_texto{
        text-align: justify;
        text-justify: inter-word;
    }
    #slider-container{
        display: none;
    }

</style>
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#" style="color: #ffffff;">Home</a></li>
                    <li class="active" style="color: #ffffff;">MEES</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 title="">CONTACTO DIRE&Ccedil;&Otilde;ES</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">

    <div class="row">
        <div class="col-md-6">

            <div class="offset-anchor" id="contact-sent"></div>


            <h2 class="mb-sm mt-sm"><strong>Contacte-</strong>nos</h2>
            <form id="contactFormAdvanced" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="true" name="emailSent" id="emailSent">
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Seu Nome *</label>
                            <input type="text" value="" data-msg-required="Popr favor, digite seu nome." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Seu Email *</label>
                            <input type="email" value="" data-msg-required="Por favor, digite o seu email." data-msg-email="Por favor, digite o email correcto." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Assunto *</label>
                            <input type="text" value="" data-msg-required="Por favor, digite o assunto." data-msg-email="Por favor, digite o assunto." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Direc&ccedil;&atilde;o</label>
                            <select data-msg-required="Por favor, seleciona uma direcção." class="form-control" name="subject" id="subject" required>
                                <option value="">Selecione</option>
                                <option value="Direcção da Educação Pré-Escolar" title="">Direcção da Educação Pré-Escolar</option>
                                <option value="Direcção do Ensino Secundário e Tecnico Profissional">Direcção do Ensino Secundário e Tecnico Profissional</option>
                                <option value="Direcção de Educação de Jovens e Adultos">Direcção de Educação de Jovens e Adultos</option>
                                <option value="Direcção do Ensino Superior e Ciência">Direcção do Ensino Superior e Ciência</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Message *</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Human Verification *</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="captcha form-control">
                                <div class="captcha-image">
                                    <img id="captcha-image" src="php/simple-php-captcha/simple-php-captcha.php/porto/5.7.2/php/simple-php-captcha/simple-php-captcha288e.png?_CAPTCHA&amp;t=0.91153300+1566385210" alt="CAPTCHA code">												</div>
                                <div class="captcha-refresh">
                                    <a href="#" id="refreshCaptcha"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="" maxlength="6" data-msg-captcha="Wrong verification code." data-msg-required="Please enter the verification code." placeholder="Type the verification code." class="form-control input-lg captcha-input" name="captcha" id="captcha" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-lg pull-right" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <hr>
            <h4 class="heading-primary">The <strong>Office</strong></h4>
            <ul class="list list-icons list-icons-style-3 mt-xlg">
                <li><i class="fa fa-map-marker"></i> <strong>Endereço:</strong>Rua Samora Machel, Agua Grande</li>
                <li><i class="fa fa-phone"></i> <strong>Telefone:</strong> +239 2223366 / 2226412</li>
                <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href=#">info@mecc.gov.st</a></li>
            </ul>
            <div class="row lightbox mt-xl" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                <div class="col-md-4">
                    <a class="img-thumbnail" href="img/diversos/img_para_contacto_slid.jpg" data-plugin-options="{'type':'image'}">
                        <img class="img-responsive" src="img/diversos/img_para_contacto_slid.jpg" alt="">
                        <span class="zoom">
                            <i class="fa fa-search"></i>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="img-thumbnail" href="img/diversos/img_palacio_stp.jpg" data-plugin-options="{'type':'image'}">
                        <img class="img-responsive" src="img/diversos/img_palacio_stp.jpg" alt="">
                        <span class="zoom">
                            <i class="fa fa-search"></i>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="img-thumbnail" href="img/diversos/img_praia_stp3.jpg" data-plugin-options="{'type':'image'}">
                        <img class="img-responsive" src="img/diversos/img_praia_stp3.jpg" alt="">
                        <span class="zoom">
                            <i class="fa fa-search"></i>
                        </span>
                    </a>
                </div>
            </div>
            <hr>
            <h4 class="heading-primary">Business <strong>Hours</strong></h4>
            <ul class="list list-icons list-dark mt-xlg">
                <li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
                <li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
                <li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
            </ul>

        </div>
    </div>
</div>