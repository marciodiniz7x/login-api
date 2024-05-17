<?php 

    $servidor = "mysql";
    $usuarioDB = "root";
    $senhaDB = "";
    $banco = "cadastro";
    $conexao = mysqli_connect($servidor, $usuarioDB, $senhaDB, $banco);

    $usuario = $_POST['usuario'];
    $senha = sha1($_POST['senha']);  

    $pesquisaUsuario = mysqli_fetch_row(mysqli_query( $conexao, "
        SELECT id FROM usuario
        WHERE usuario = '$usuario'
        AND senha = '$senha'
    "));

    if ($pesquisaUsuario == 1) { // Usuário encontrado, realiza login
        echo "1";
    } else { // Usuário ou senha inválido
        echo "0";
    }

?>