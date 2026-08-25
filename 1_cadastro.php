<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Status Codes</title>
</head>

<body>
    <h1>Cadastro de alunos (com status code)</h1>
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required> <br>

        <button type="submit">Enviar</button>
    </form>
    <hr>
    <?php
    // a tag server é uma variavel superglobal do PHP que tem acesso as requisições do servidor, aqui esse está confirmando se a requisição é via post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // se sim ele funfa
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        // tratando erros e reagindo. 1- nn escreveu tudo
        if ($nome == "" || $idade == "") {
            http_response_code(400);
            echo "<h2>Status 400 - Faltou informações<\h2>";
            // caso a idade não seja um número
        } else if (!is_numeric($idade)) {
            http_response_code(400);
            echo "<h2>Status 400 - Idade precisa ser um número<\h2>";
            // mostrando o resultado
        } else {
            http_response_code(201);
            echo "<h2>Status 201 - Criado: $nome, $idade anos.<\h2>";
        }
    }else{
        http_response_code(200);
        echo "<p>Preencha o formulário acima e envie.<\p>";
    }

    ?>
</body>

</html>