function verificarCadastro(event) {
    event.preventDefault(); // Previne o comportamento padrão de envio do formulário

    var usuario = $(".usuario").val();
    var senha = $('.senha').val();
    var confirmarSenha = $('.confirmarSenha').val();

    // Limpar mensagens anteriores
    $("#debugMessages").empty().hide();

    if (usuario === "") {
        alert('Usuário vazio');
        return;
    }

    if (senha === "") {
        alert('Senha vazia');
        return;
    }

    if (senha !== confirmarSenha) {
        alert('Senhas incorretas');
        return;
    }

    $.ajax({
        type: "POST",
        url: "../script/pesquisa-cadastro.php",
        data: $("#formCadastro").serialize(),
        dataType: "text",
        success: function (resultado) {

            if (resultado.trim() === '0') {
                alert('Usuário já cadastrado!'); // Não cadastra
            } else {
                alert("Cadastro realizado com sucesso!");
                window.location.href = "../"; // Cadastra e redireciona para a página de login
            }
        },
    });
}

// Vincular o evento de submit do formulário à função verificarCadastro
$(document).ready(function() {
    $("#formCadastro").on('submit', verificarCadastro);
});