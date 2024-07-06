<?php 
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <?php 
    
        if(!isset($_SESSION['login'])) {

            if(isset($_POST['acao'])) {
                $login = 'marcio';
                $senha = '123';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm) {
                    // Logado com sucesso
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                    exit();
                } Else {
                    // Falha no login
                    echo "Dados inválidos";
                }

            }
            include('login.php');
        } else {
            if(isset($_GET['logout'])) {
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include('home.php');
        }

    ?>
</body>
</html>