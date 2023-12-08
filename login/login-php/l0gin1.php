<?php
session_start();
?>

<?php
include_once("templates/header.php"); 
?>
<style>
    /* .login-container {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 45px;
    }

    .login-container input {
        width: 100%;
        padding: 10px;
        border-radius: 45px;
        background-color: #BFCFF9;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    .login-container button {
        width: 40%;
        padding: 10px;
        border-radius: 45px;
        background-color: #2E57C0;
        border: none;
        border-radius: 45px;
        cursor: pointer;
    } */

</style>



    <?php
    if (isset($_SESSION['nao_autenticado'])) :
    ?>
        <div class="notification is-danger">
            <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>
    <div class="login-container">
        <form action="login.php" method="POST">
            <div class="imagem">
                <img src="imgs/login.png" width="320" text-align=center; alig height="205" />
            </div>

            <input name="email" class="login-container input" placeholder="Seu e-mail" autofocus="">
            <br>
            <input name="senha" class="login-container input" type="password" placeholder="Sua senha">
    </div>
    </div>

    <div class="link-wrapper">
        <a href="cadastro.php">Cadastrar</a>
    </div>
    <button type="submit" class="login-container button">Entrar</button>
    </form>
    </div>

    <?php
  include_once("templates/footer.php");
?>
