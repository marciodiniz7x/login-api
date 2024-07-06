<div class="login-ok">
    <?php
        $userName = $_SESSION['login'];
        
        echo '<h2> Bem vindo, ' .$_SESSION['login'].'</h2>';
        echo '<a href="?logout">Encerrar sessão</a>';
    ?>
</div>