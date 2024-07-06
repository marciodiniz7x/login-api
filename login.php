<div class="form-area">
    <h1>Login</h1>
    <form method="post">
        <input type="text" name="login"  placeholder="Nome" required autocomplete="off">
        <input type="password" name="senha" placeholder="Senha" required autocomplete="off">
        <input type="submit" name="acao" value="Login" class="submit">
        <div class="new-user">
            <span>Não tem conta?</span>
            <a href="register.php">Cadastrar</a>
        </div>
    </form>
    <?php 
        if(isset($loginError)) {
            echo $loginError;
        }
    ?>
</div>