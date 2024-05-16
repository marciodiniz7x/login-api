<?php 

    $servidor = "mysql";
    $usuarioDB = "root";
    $senhaDB = "";
    $banco = "cadastro";
    $conexao = mysqli_connect($servidor, $usuarioDB, $senhaDB, $banco);

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];  
    
    echo $usuario . " + 123456";

    $pesquisaUsuario = mysqli_num_rows(mysqli_query($conexao, "
        SELECT usuario FROM usuario
        WHERE usuario = '$usuario'
    "));

    if($pesquisaUsuario > 0) { // Usuário já cadastrado
        echo 0;
    } else { // Realiza cadastro
        echo 1;
    }

    // mysqli_query($conexao, "INSERT INTO usuario VALUES (NULL, 'marcio7x', 'teste123')");

?>