<?php
include_once("templates/header.php");
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os valores do formulário
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $cep = $_POST["cep"];
    $numero = $_POST["numero"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $rua = $_POST["rua"];
    $complemento = $_POST["complemento"];

    // Realizar qualquer processamento adicional aqui, como validar ou salvar no banco de dados
    // ...

    // Exemplo: imprimir os valores
    echo "E-mail: $email<br>";
    echo "CPF: $cpf<br>";
    echo "CEP: $cep<br>";
    echo "Número: $numero<br>";
    echo "Senha: $senha<br>";
    echo "Telefone: $telefone<br>";
    echo "Rua: $rua<br>";
    echo "Complemento: $complemento<br>";
}
?>
<link rel="stylesheet" href="cadastro.css">

<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jura:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/cadastro.css">
</head>

<body>

<div class="imagem">
    <center> <img src="imgs/cadastre-se.png" width="450px" /> </center>
</div>
<form class="forms">


            <div>
            <h2>Nome:</h2>
                <input type="text" name="username" class="forms1" required>
                <form action="/login" method="post"> <br>
                    
                <h2>E-mail:</h2>
                <input type="email" name="email" class="forms1"> <br>

                <h2>CPF:</h2>
                <input type="text" name="cpf" class="forms1" oninput="formatarCPF(this)" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"><br>

                <h2>CEP:</h2>
                <input type="text" name="cep" class="forms1" oninput="formatarCEP(this)" pattern="\d{5}-\d{3}"><br>

                <h2>Número:</h2>
                <input type="number" name="numero" class="forms2"  min="0"><br> 
               

            </div>

            <div>
            
            
                <h2>Senha:</h2>
                <input type="password" name="senha" class="forms1"> <br>

                <h2>Telefone:</h2>
                <input type="text" name="cpf" class="forms1"><br>

                <h2>Rua:</h2>
                <input type="text" name="cep" class="forms1"> <br>

                <h2>Complemento:</h2>
                <input type="text" name="numero" class="forms1"><br>
            </div> 
</div>
        </form>
        
            <br>
         <button type="submit">Criar conta</button>

            <script>
                function formatarCPF(campo) {
                    campo.value = campo.value.replace(/\D/g, ''); // Remove caracteres não numéricos
                    campo.value = campo.value.slice(0, 11); // Limita o CPF a 11 dígitos

                    if (campo.value.length > 3) {
                        campo.value = campo.value.replace(/(\d{3})(\d{3})?(\d{3})?(\d{2})?/, '$1.$2.$3-$4');
                    } else if (campo.value.length > 6) {
                        campo.value = campo.value.replace(/(\d{3})(\d{3})(\d{3})?(\d{2})?/, '$1.$2.$3-$4');
                    } else if (campo.value.length > 9) {
                        campo.value = campo.value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                    }
                }

                function formatarCEP(campo) {
                    campo.value = campo.value.replace(/\D/g, ''); // Remove caracteres não numéricos
                    campo.value = campo.value.slice(0, 8); // Limita o CEP a 8 dígitos

                    if (campo.value.length > 5) {
                        campo.value = campo.value.replace(/(\d{5})(\d{3})/, '$1-$2');
                    }
                }
            </script>


</body>

</html>