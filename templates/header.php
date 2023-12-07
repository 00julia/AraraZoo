<?php

  include_once("config/url.php");
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONTES  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300&display=swap" rel="stylesheet">
    <!-- CSS  -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">

</head>
<body>
    <div class="fixo">
        <header>
            <table>
                <a href="<?= $BASE_URL ?>index.php"><img src="imgs/logo.jpg" class="logo"></a>
                    <div class="login">   
                    <a href=#>Entrar</a>
                    <a href=#>Criar Conta</a>
                    </div>
            </table>
        </header>
        <div class="nav">
            <a href="#">AraraZOO Hotel</a>
            <a href="#">Nossos Animais</a>
            <a href="#">Nosso Projeto</a>
            <a href="#">Contato</a>
        </div>
    </div>
