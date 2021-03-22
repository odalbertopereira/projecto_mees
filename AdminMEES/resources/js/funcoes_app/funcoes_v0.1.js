//funcao para registrar uma nova noticia no db
$("#btn_add_noticia").click(function () {
    var titulo = $('#form_noticia #ctitulo').val();
    var descri = $('#form_noticia #cdescr').val();
    var imagem = $('#form_noticia #cimg').val();
    var anexo = $('#form_noticia #canexo').val();
    var extension_img = $('#form_noticia #cimg').val().split('.').pop().toLowerCase();
    var extension_anexo = $('#form_noticia #canexo').val().split('.').pop().toLowerCase();
    if (titulo === '' || descri === '' || imagem === '') {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Preencha todos os campos com *');
//        ['png', 'jpg', 'jpeg', 'gif', 'pdf', 'doc', 'docx']
    } else if (imagem !== '' && (jQuery.inArray(extension_img, ['png', 'jpg', 'jpeg', 'gif', 'pdf', 'doc', 'docx']) === -1)) {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Formato de Imagem Inválida.<br> Verifique o tipo de Imagem!<br> O tipo permitido são os seguintes: png, jpg, jpeg, gif!');
    } else if (anexo !== '' && (jQuery.inArray(extension_anexo, ['pdf', 'doc', 'docx']) === -1)) {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Formato de Anexo Inválido.<br> Verifique o tipo de Anexo!<br> O tipo permitido são os seguintes: pdf, doc, docx!');
    } else {
        var form = new FormData($("form[name='form_noticia']")[0]);
        $.ajax({
            url: "./controller/addnoticia.php",
            method: "POST",
            type: 'POST',
            enctype: "multipart/form-data",
            data: form,
            contentType: false,
            processData: false,
            success: function (valor) {
                if (valor === -9) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Preencha todos os campos com *');
                } else if (valor === -6) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Tamanho do Anexo Permitido apenas de 4MB!');
                } else if (valor === -7) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Formato de Anexo Inválido.<br> Verifique o tipo de Anexo!<br> O tipo permitido são os seguintes: png, jpg, jpeg, gif, pdf,doc,docx!');
                } else if (valor > 0) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.success('MP+', 'Noticia Adicionada com Sucesso!');
                    window.setTimeout(function () {
                        location.href = '?pag=noticias';
                    }, 2000);
                } else {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
                }
            }
        });
    }
});
//funcao para editar uma noticia 
$("#btn_edit_noticia").click(function () {
    var reg_id = $('#formeditarnoticia #reg_id').val();
    var tituloedit = $('#formeditarnoticia #ctituloedit').val();
    var descriedit = $('#formeditarnoticia #cdescredit').val();
    var newimgedit = $('#formeditarnoticia #cnewimgedit').val();
    var anexoedit = $('#formeditarnoticia #canexoedit').val();
    var extension_anexo = $('#formeditarnoticia #canexoedit').val().split('.').pop().toLowerCase();
    var extension_imgnew = $('#formeditarnoticia #cnewimgedit').val().split('.').pop().toLowerCase();
    if (tituloedit === '' || descriedit === '' || reg_id === '') {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 5000
        };
        toastr.error('MP+', 'Preencha todos os campos com *');
    } else if (anexoedit !== '' && (jQuery.inArray(extension_anexo, ['pdf', 'doc', 'docx']) === -1)) {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Formato de Anexo Inválido.<br> Verifique o tipo de Anexo!<br> O tipo permitido são os seguintes: pdf, doc, docx!');
    } else if (newimgedit != '' && (jQuery.inArray(extension_imgnew, ['png', 'jpg', 'jpeg', 'gif']) === -1)) {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Formato de Imagem Inválida.<br> Verifique o tipo de Imagem!<br> O tipo permitido são os seguintes: png, jpg, jpeg, gif!');
    } else {
        var form = new FormData($("form[name='formeditarnoticia']")[0]);
        $.ajax({
            url: "./controller/editnoticia.php",
            method: "POST",
            type: 'POST',
            enctype: "multipart/form-data",
            data: form,
            contentType: false,
            processData: false,
            success: function (valor) {
                if (valor > 0) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.success('MP+', 'Notícia Actualizada com Sucesso!');
                    window.setTimeout(function () {
                        location.href = '?pag=noticias';
                    }, 2000);
                } else if (valor === -3) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Ocorreu alguma falha a realizar a actualização.. tente novamente!');
                } else {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
                }
            }
        });
    }
});
//funcao para adiconar usuario 
$("#btn_add_user").click(function () {
    var cusername = $('#form_user #cusername').val();
    var cemail = $('#form_user #cemail').val();
    var cfoto_user = $('#form_user #cfoto_user').val();
    if (cusername === '' || cemail === '' || cfoto_user === '') {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Preencha todos os campos com *');
    } else {
        var form = new FormData($("form[name='form_user']")[0]);
        $.ajax({
            url: "./controller/adduser.php",
            method: "POST",
            type: 'POST',
            enctype: "multipart/form-data",
            data: form,
            contentType: false,
            processData: false,
            success: function (valor) {
                if (valor > 0) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.success('MP+', 'Usuario Cadastrado com Sucesso!');
                    window.setTimeout(function () {
                        location.href = '?pag=adduser';
                    }, 2000);
                } else if (valor == -2) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Já existe algum usuario com o mesmo email!');
                } else if (valor == -3) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Verifique o formato de email!');
                } else if (valor == -4) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Verifique o formato de email alternativo!');
                } else {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
                }
            }
        });
    }
});
//funcao para editar usuario 
$("#btn_edit_user").click(function () {
    var cusername = $('#formeditaruser #cusernameedit').val();
    var cemail = $('#formeditaruser #cemailedit').val();
    if (cusername === '' || cemail === '') {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Preencha todos os campos com *');
    } else {
        var form = new FormData($("form[name='formeditaruser']")[0]);
        $.ajax({
            url: "./controller/edituser.php",
            method: "POST",
            type: 'POST',
            enctype: "multipart/form-data",
            data: form,
            contentType: false,
            processData: false,
            success: function (valor) {
                if (valor > 0) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.success('MP+', 'Usuario Actualizado com Sucesso!');
                    window.setTimeout(function () {
                        location.href = '?pag=adduser';
                    }, 2000);
                } else if (valor == -2) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Verifique o formato de email!');
                } else if (valor == -3) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Verifique o formato de email alternativo!');
                } else {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
                }
            }
        });
    }
});
//funcao para add video 
$("#btn_add_video").click(function () {
    var legenda = $('#form_video #clegenda').val();
    var cimg_video = $('#form_video #cimg_video').val();
    var selclasse = $('#form_video #selclasse').val();
    if (legenda === '' || cimg_video === '' || selclasse ==='') {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Preencha todos os campos com *');
    } else {
        var form = new FormData($("form[name='form_video']")[0]);
        $.ajax({
            url: "./controller/addvideo.php",
            method: "POST",
            type: 'POST',
            enctype: "multipart/form-data",
            data: form,
            contentType: false,
            processData: false,
            success: function (valor) {
                if (valor > 0) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.success('MP+', 'Video Cadastrado com Sucesso!');
                    window.setTimeout(function () {
                        location.href = '?pag=videos';
                    }, 2000);
                } else if (valor == -9) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Preencha todos os campos com *!');
                } else if (valor == -1) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'O link digitado já existe cadastrado...!');
                } else {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
                }
            }
        });
    }
});
//funcao para editar video 
$("#btn_edit_video").click(function () {
    var legendedit = $('#formeditarvideo #clegendedit').val();
    var link_edit = $('#formeditarvideo #clink_edit').val();
    if (legendedit === '' || link_edit === '') {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Preencha todos os campos com *');
    } else {
        var form = new FormData($("form[name='formeditarvideo']")[0]);
        $.ajax({
            url: "./controller/editvideo.php",
            method: "POST",
            type: 'POST',
            enctype: "multipart/form-data",
            data: form,
            contentType: false,
            processData: false,
            success: function (valor) {
                if (valor > 0) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.success('MP+', 'Video Actualizado com Sucesso!');
                    window.setTimeout(function () {
                        location.href = '?pag=videos';
                    }, 2000);
                } else if (valor == -9) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Preencha todos os campos com *!');
                } else {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
                }
            }
        });
    }
});
//funcao para add slides 
$("#btn_add_slid").click(function () {
    var cimg_slid = $('#form_slides #cimg_slid').val();
    if (cimg_slid === '') {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Preencha o campo com *!');
    } else {
        var form = new FormData($("form[name='form_slides']")[0]);
        $.ajax({
            url: "./controller/addslide.php",
            method: "POST",
            type: 'POST',
            enctype: "multipart/form-data",
            data: form,
            contentType: false,
            processData: false,
            success: function (valor) {
                if (valor > 0) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.success('MP+', 'Slide Cadastrado com Sucesso!');
                    window.setTimeout(function () {
                        location.href = '?pag=slids';
                    }, 2000);
                } else if (valor == -9) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Preencha o campo com *!');
                } else {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
                }
            }
        });
    }
});
//funcao para edit slides 
$("#btn_edit_slide").click(function () {
    var cimg_slidedit = $('#formeditarslide #cimg_slidedit').val();
    var cnew_imgslidedit = $('#formeditarslide #cnew_imgslidedit').val();
    var extension_newslid = $('#formeditarslide #cnew_imgslidedit').val().split('.').pop().toLowerCase();
    if (cimg_slidedit === '') {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Este Slide foi cadastrado de maneira errada... Cantacte o Administrador do Site');
    } else if (cnew_imgslidedit != '' && (jQuery.inArray(extension_newslid, ['png', 'jpg', 'jpeg', 'gif']) === -1)) {
        toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
        toastr.error('MP+', 'Formato de Imagem Inválida.<br> Verifique o tipo de Imagem!<br> O tipo permitido são os seguintes: png, jpg, jpeg, gif!');
    } else {
        var form = new FormData($("form[name='formeditarslide']")[0]);
        $.ajax({
            url: "./controller/editslide.php",
            method: "POST",
            type: 'POST',
            enctype: "multipart/form-data",
            data: form,
            contentType: false,
            processData: false,
            success: function (valor) {
                if (valor > 0) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.success('MP+', 'Slide Actualizado com Sucesso!');
                    window.setTimeout(function () {
                        location.href = '?pag=slids';
                    }, 2000);
                } else if (valor == -9) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Preencha o campo com *!');
                } else if (valor == -6) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Tamanho da foto maior que permitido... Aceite no maxímo 4GB!');
                } else if (valor == -7) {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Formato de Imagem Inválida.<br> Verifique o tipo de Imagem!<br> O tipo permitido são os seguintes: png, jpg, jpeg, gif!');
                } else {
                    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                    toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
                }
            }
        });
    }
});

