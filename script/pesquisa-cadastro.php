<?php 

    $servidor = "mysql";
    $usuario = "root";
    $senha = "";
    $banco = "cadastro";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];  
    
    echo $usuario . " + 123456";

    mysqli_query($conexao, "INSERT INTO usuario VALUES (NULL, 'marcio7x', 'teste123')");

    

?>