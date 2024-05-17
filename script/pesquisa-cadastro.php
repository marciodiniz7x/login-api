<?php 

    $servidor = "mysql";
    $usuarioDB = "root";
    $senhaDB = "";
    $banco = "cadastro";
    $conexao = mysqli_connect($servidor, $usuarioDB, $senhaDB, $banco);

    $usuario = $_POST['usuario'];
    $senha = sha1($_POST['senha']);  

    $pesquisaUsuario = mysqli_num_rows(mysqli_query($conexao, "
        SELECT id FROM usuario
        WHERE usuario = '$usuario'
    "));

    if($pesquisaUsuario > 0) { // Usuário já cadastrado
        echo '0';
    } else { // Realiza cadastro

        mysqli_query($conexao, "
            INSERT INTO usuario VALUES
            (NULL, '$usuario', '$senha')
        ");
        echo '1';
    };

?>