function  fctLogar() {
    $.post('require/jp/jpLogin.php', {
        usuario: $('#useremail').val(),
        senha: $('#csenha').val()
    }, function (res) {
        if (res == false) {
            $('#formLogin #spanL').html('Logado com sucesso!').css({color: '#090'});
            location.href = 'index.php';
        } else {
            $('#formLogin #spanL').html(res).css({color: '#f00'});
        }
    });

}

function  fctAlter() {
    $.post('require/jp/jpAlterSenha.php', {
        email: $('#cemail').val(),
        senhaantiga: $('#csenha_ant').val(),
        senhanova: $('#csenha_nv').val()
    }, function (res) {
        if (res == false) {
            $('#alter_senhaabc #spanL').html('Senha Alterada com Sucesso!').css({color: '#090'});
            location.href = 'login.php';
        } else {
            $('#alter_senhaabc #spanL').html(res).css({color: '#f00'});
        }
    });
}


