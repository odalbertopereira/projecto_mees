$(document).ready(function () {
    $('#enviar_sms').on('click', function () {
        var nome = $('#contactForm #name').val();
        var email = $('#contactForm #email').val();
        var message = $('#contactForm #message').val();
        if (nome === '' || email === '' || message === '') {
            alertify.error('Preencha os campos!');
        } else {
            var form = new FormData($("form[name='contactForm']")[0]);
            $.ajax({
                url: "./php/ContactoMees.php",
                method: "POST",
                type: 'POST',
                data: form,
                contentType: false,
                processData: false,
                success: function (valor) {
                    if (valor < 1) {
                        alertify.error('A mensagem não pode ser enviada!');
                    } else if (valor >= 1) {
                        alertify.success('Mensagem enviada com sucesso!');
                    } else {
                        alertify.error('Falha ao Contactar o MEES');
                    }

                }
            });
        }
    });
//    function border_element() {
//        var nome = document.getElementById('name').style;
//        var email = document.getElementById('email').style;
//        nome.borderRadius = '1em solid red'; // standard
//        nome.MozBorderRadius = '1em solid red'; // Mozilla
//        nome.WebkitBorderRadius = '1em solid red'; // WebKit
//        return nome;
//    }
});

