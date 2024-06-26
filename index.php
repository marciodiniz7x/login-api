<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container bg-dark mt-5 p-3 text-white text-center">
        <h2>Sistema de Login</h2>
        <br>
        <form action="" method="post" onsubmit="return validarLogin();" id="formLogin">

            <div class="row">
                <div class="col-12">
                    Usuário:
                </div>
                <div class="col-12">
                    <input type="text" name="usuario" placeholder="Digite o seu nome de usuário" class="form-control">
                </div>
                <div class="col-12">
                    Senha:
                </div>
                <div class="col-12">
                    <input type="password" name="senha" placeholder="Digite a sua senha" class="form-control">
                </div>
                <div class="col-12">
                    <input type="button" class="btn btn-success form-control mt-3" value="ENTRAR">
                </div>
                <div class="col-12 mt-3"><a href="cadastro.php">Crie sua conta</a></div>
            </div>

        </form>

    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        function validarLogin() {
            var usuario = $(".usuario").val();
            var senha = $(".senha").val();

            if (usuario != "" && senha != "") {
                $.ajax({
                    type: "POST",
                    url: "script/validar-login.php",
                    data: $("#formLogin").serialize(),
                    dataType: "text",
                    success: function(resultado) {
                        if (resultado == "0") { // Falha no login

                        } else { // Login realizado com sucesso

                        }

                        return false
                    },
                });
            }
        }
    </script>
</body>

</html>