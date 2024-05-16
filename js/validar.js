function verificarCadastro() {
    var usuario = $(".usuario").val();
    var senha = $('.senha').val();
    var confirmarSenha = $('.confirmarSenha').val();
    
    if (usuario !== "") {
        if (senha !== "") {
            if (senha === confirmarSenha) {
                $.ajax({
                    type: "POST",
                    url: "../script/pesquisa-cadastro.php",
                    data: $("#formCadastro").serialize(),
                    success: function (resultado) {
                        if (resultado == 0) {
                            alert('Usuário já cadastrado!');
                        } else {
                            alert("Cadastro realizado com sucesso!");
                            window.location = "../";
                        }
                    }
                });
            } else {
                alert('Senhas incorretas');
            }
        } else {
            alert('Senha vazia');
        }
    } else {
        alert('Usuário vazio');
    }
}