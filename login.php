<?php
    include_once("templates/header.php"); 
?>
<style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;

            
        }
        .login-container {
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
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2></h2>
        <form action="/login" method="post">
        <div class="imagem">
    <img src="login.png" width="320" text-align=center; alig height="205" />
</div>
            <input type="text" name="username" placeholder="digite seu email..." required>
            <br>
            <input type="password" name="password" placeholder="digite sua senha..." required>
            <br>
            <button type="submit">ENTRAR</button>
        </form>
    </div>
</body>
</html>