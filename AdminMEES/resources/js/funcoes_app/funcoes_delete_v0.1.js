function delete_noticia(id) {
    alertify.confirm('Eliminar Dados', 'Deseja Realmente Eliminar todos os dados do banco, não terá opção de recuperar os dados apagados!',
            function () {
                delete_noticia_all(id);
            },
            function () {
                alertify.error('Cancelaste o Eliminar! :(');
            });
}
function delete_noticia_all(id) {
    var canda = 'id=' + id;
    $.ajax({
        type: 'POST',
        url: "./controller/deletenoticia.php",
        data: canda,
        success: function (r) {
            if (r == false) {
                alertify.success('Dado Eliminado Com Sucesso! :)');
                window.setTimeout(function () {
                    location.href = '?pag=noticias';
                }, 1000);
            } else {
                alertify.error('Não foi Possivel eliminar Dado! :(');
            }
        }
    });
}
function delete_video(id) {
    alertify.confirm('Eliminar Dados', 'Deseja Realmente Eliminar todos os dados do banco, não terá opção de recuperar os dados apagados!',
            function () {
                delete_video_all(id);
            },
            function () {
                alertify.error('Cancelaste o Eliminar! :(');
            });
}
function delete_video_all(id) {
    var canda = 'id=' + id;
    $.ajax({
        type: 'POST',
        url: "./controller/deletevideo.php",
        data: canda,
        success: function (r) {
            if (r == false) {
                alertify.success('Dado Eliminado Com Sucesso! :)');
                window.setTimeout(function () {
                    location.href = '?pag=videos';
                }, 1000);
            } else {
                alertify.error('Não foi Possivel eliminar Dado! :(');
            }
        }
    });
}
function delete_slide(id) {
    alertify.confirm('Eliminar Dados', 'Deseja Realmente Eliminar todos os dados do banco, não terá opção de recuperar os dados apagados!',
            function () {
                delete_slide_all(id);
            },
            function () {
                alertify.error('Cancelaste o Eliminar! :(');
            });
}
function delete_slide_all(id) {
    var canda = 'id=' + id;
    $.ajax({
        type: 'POST',
        url: "./controller/deleteslide.php",
        data: canda,
        success: function (r) {
            if (r == false) {
                alertify.success('Dado Eliminado Com Sucesso! :)');
                window.setTimeout(function () {
                    location.href = '?pag=slids';
                }, 1000);
            } else {
                alertify.error('Não foi Possivel eliminar Dado! :(');
            }
        }
    });
}

