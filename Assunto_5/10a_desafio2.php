<!-- Digite sua solução para o desafio (AQUI) -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <form method="post" action="">
        <label for="nome">Nome do produto:</label>
        <input type="text" name="nome" required><br>

        <label for="preco">Preço</label>
        <input type="number" name="preco" required><br>

        <button type="submit">Cadastrar produto</button><br>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($preco < 0) {
            echo "<p style='color: red;'>Nome ou preço do produto inválido.</p>";
        } else {
            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome','$preco')";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: Darkgreen;'>Produto cadastrado com sucesso! $nome custando $preco reais</p>";
            } else {
                echo "<p style='color: red;'>Erro ao cadastrar o produto</p>";
            }
        }


        $conn->close();
    }
    ?>
</body>

</html>