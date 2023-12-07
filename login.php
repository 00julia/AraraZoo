<?php
    include_once("templates/header.php"); 
?>
<link rel="stylesheet" href="css/login.css">

<body>
    <div class="login-container">
        <h2></h2>
        <form action="/login" method="post">
        <div class="imagem">
    <img src="login.png" width="320" text-align=center; alig height="205" />
</div>
            <div class="link-wrapper">
            <a href="#">Cadastre-se</a>
            </div>
            <br>
            <input type="text" name="username" placeholder="digite seu email..." required>
            <br>
            <input type="password" name="password" placeholder="digite sua senha..." required>
            <br>
            <button type="submit">ENTRAR</button>
        </form>
    </div>
</body>
</html>