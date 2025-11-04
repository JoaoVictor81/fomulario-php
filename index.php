<?php
session_start(); // 3. Inicia a sessão para acessar os dados

// Verifica se o usuário está logado
if (!isset($_SESSION['user_email'])) {
    header("Location: login.html"); 
    exit;
}

// 4. Recupera o nome e o email da sessão
$nome = $_SESSION['user_nome'] ?? 'Usuário'; // Usa 'Usuário' como fallback, caso o nome não venha
$email = $_SESSION['user_email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Página Inicial</title>
</head>
<body>

    <div class="container">
        <h2>Bem-vindo, <?php echo htmlspecialchars($nome); ?>!</h2>
        
        <p>Você está logado com sucesso. Aqui estão seus dados:</p>
        
        <p><strong>Nome de Usuário:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Seu Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        
        <br>
        <form action="logout.php" method="post">
            <button type="submit">Sair (Logout)</button>
        </form>
    </div>

</body>
</html>