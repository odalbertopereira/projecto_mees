function getNoticiaEdit(dados) {
    var data = dados.split("||");
    $('#formeditarnoticia #reg_id').val(data[0]);
    $('#formeditarnoticia #ctituloedit').val(data[1]);
    $('#formeditarnoticia #cdescredit').val(data[2]);
    $('#formeditarnoticia #cimg_ant').val(data[3]);
    $('#formeditarnoticia #canexoedit_ant').val(data[4]);
}
function getUserEdit(dados) {
    var data = dados.split("||");
    $('#formeditaruser #regf_id').val(data[0]);
    $('#formeditaruser #cusernameedit').val(data[1]);
    $('#formeditaruser #cemailedit').val(data[2]);
    $('#formeditaruser #cemailaltedit').val(data[3]);
    $('#formeditaruser #cfotoedit').val(data[4]);
}
function getVideoEdit(dados) {
    var data = dados.split("||");
    $('#formeditarvideo #reh_id').val(data[0]);
    $('#formeditarvideo #clegendedit').val(data[1]);
//    $('#formeditarvideo #cimg_ant_edit').val(data[2]);
    $('#formeditarvideo #clink_edit').val(data[3]);
}
function getSlideEdit(dados) {
    var data = dados.split("||");
    $('#formeditarslide #rehs_id').val(data[0]);
    $('#formeditarslide #clegend_slidedit').val(data[1]);
    $('#formeditarslide #cimg_slidedit').val(data[2]);
}
function update_estado_noticia(id) {
    alertify.confirm('Notícia', 'Deseja Realmente Activar ou Inactivar a Notícia Selecionada?',
            function () {
                update_estado_noticia_all(id);
            },
            function () {
                alertify.error('Cancelaste o Pedido! :(');
            });
}
function update_estado_noticia_all(id) {
    var canda = 'codigo=' + id;
    $.ajax({
        type: 'POST',
        url: "./controller/updatestatusnoticia.php",
        data: canda,
        success: function (r) {
            if (r == 1) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Notícia retirada do ar com Sucesso!');
                window.setTimeout(function () {
                    location.href = '?pag=noticias';
                }, 2000);
            } else if (r == 2) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Notícia Activada com Sucesso!');
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
function update_estado_user(id) {
    alertify.confirm('Usuário', 'Deseja Realmente Activar ou Inactivar Usuário Selecionado?',
            function () {
                update_estado_user_all(id);
            },
            function () {
                alertify.error('Cancelaste o Pedido! :(');
            });
}
function update_estado_user_all(id) {
    var canda = 'codigo=' + id;
    $.ajax({
        type: 'POST',
        url: "./controller/updatestatususer.php",
        data: canda,
        success: function (r) {
            if (r == 1) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Usuário inactivdo com Sucesso!');
                window.setTimeout(function () {
                    location.href = '?pag=adduser';
                }, 2000);
            } else if (r == 2) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Usuário activado com Sucesso!');
                window.setTimeout(function () {
                    location.href = '?pag=adduser';
                }, 2000);
            } else {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
            }
        }
    });
}
function update_estado_user_senhapdr(id) {
    alertify.confirm('Usuário', 'Deseja Realmente Activar a Senha Padrão do Usuário Selecionado?',
            function () {
                update_estado_user_senhapdr_all(id);
            },
            function () {
                alertify.error('Cancelaste o Pedido! :(');
            });
}
function update_estado_user_senhapdr_all(id) {
    var canda = 'codigo=' + id;
    $.ajax({
        type: 'POST',
        url: "./controller/updatestatususerpass.php",
        data: canda,
        success: function (r) {
            if (r > 0) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Senha Padrão Activada com sucesso!');
                window.setTimeout(function () {
                    location.href = '?pag=adduser';
                }, 2000);
            } else if (r == -1) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Não foi possivel activar a senha padrão!');
                window.setTimeout(function () {
                    location.href = '?pag=adduser';
                }, 2000);
            } else {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
            }
        }
    });
}
function update_estado_video(id) {
    alertify.confirm('Video', 'Deseja Realmente Activar ou Inactivar Video Selecionado?',
            function () {
                update_estado_video_all(id);
            },
            function () {
                alertify.error('Cancelaste o Pedido! :(');
            });
}
function update_estado_video_all(id) {
    var canda = 'codigo=' + id;
    $.ajax({
        type: 'POST',
        url: "./controller/updatestatusvideo.php",
        data: canda,
        success: function (r) {
            if (r == 1) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Video Aula retirada do ar com Sucesso!');
                window.setTimeout(function () {
                    location.href = '?pag=videos';
                }, 2000);
            } else if (r == 2) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Video Aula Activada com Sucesso!');
                window.setTimeout(function () {
                    location.href = '?pag=videos';
                }, 2000);
            } else {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
            }
        }
    });
}
function update_estado_slide(id) {
    alertify.confirm('Video', 'Deseja Realmente Activar ou Inactivar Video Selecionado?',
            function () {
                update_estado_slide_all(id);
            },
            function () {
                alertify.error('Cancelaste o Pedido! :(');
            });
}
function update_estado_slide_all(id) {
    var canda = 'codigo=' + id;
    $.ajax({
        type: 'POST',
        url: "./controller/updatestatusslide.php",
        data: canda,
        success: function (r) {
            if (r == 1) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Slide retirada do ar com Sucesso!');
                window.setTimeout(function () {
                    location.href = '?pag=slids';
                }, 2000);
            } else if (r == 2) {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.success('MP+', 'Slide Activado com Sucesso!');
                window.setTimeout(function () {
                    location.href = '?pag=slids';
                }, 2000);
            } else {
                toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 5000};
                toastr.error('MP+', 'Falha no Sistema Contacte o Admi do Site!');
            }
        }
    });
}
