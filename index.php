<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: login.html"); 
    exit;
}

$nome = $_SESSION['user_nome'] ?? 'Usuario';
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
        
        <p>Você realizou login com sucesso. Aqui estão seus dados:</p>
        
        <p><strong>Nome de Usuario:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Seu Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        
        <br>
        <form action="logout.php" method="post">
            <button type="submit">Sair (Logout)</button>
        </form>
    </div>

</body>
</html>