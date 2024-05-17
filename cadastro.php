<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cadastro</title>
</head>

<body>

    <div class="container bg-dark mt-5 p-3 text-white text-center">
        <h2>Cadastro</h2>
        <br>
        <form action="" method="post" onsubmit="verificarCadastro();" id="formCadastro">
            <div class="row">
                <div class="col-12">
                    Usuário:
                    <input type="text" name="usuario" placeholder="Seu nome de usuário" class="form-control usuario" autocomplete="off">
                </div>
                <div class="col-12">
                    Senha:
                    <input type="password" name="senha" placeholder="Sua senha" class="form-control senha" autocomplete="off">
                </div>
                <div class="col-12">
                    Confirmar senha:
                    <input type="password" name="confirmarSenha" placeholder="Confirme sua senha" class="form-control confirmarSenha" autocomplete="off">
                </div>
                <div class="col-12">
                    <input type="submit" class="form-control btn btn-success mt-3" value="REALIZAR CADASTRO">
                </div>
            </div>
        </form>
        <br>
        <a href="/">Voltar à página de login</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="./js/validar.js"></script>
</body>

</html>