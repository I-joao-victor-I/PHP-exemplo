<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $senha = $_POST["senha"];

        if ($senha == "12345") {
            header("Location: 4b_bem_vindo.php");
            exit();
        
    }else{
        $erro = "Senha Incorreta. Tente Novamente";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
</head>
<body>
    <h2>Digite a senha para continuar</h2>
    <form method="post" action="">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <button type="submit">Entrar</button>
    </form>
    
    <?php 
    if (isset($erro)) {
        echo "<p style ='color: red;'>$erro</p>";   
    }
     ?>
</body>
</html>