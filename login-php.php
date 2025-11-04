<?php
session_start(); // 1. Inicia a sessão
include ("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

// CORREÇÃO: A consulta DEVE selecionar o campo 'nome' para que ele possa ser armazenado na sessão.
// A sintaxe da query está correta para selecionar nome, email e senha:
$sql = "SELECT nome, email, senha FROM cadastro WHERE email = '$email'"; 
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);
    
    if (password_verify($senha, $usuario['senha'])) {
        
        // 2. Armazena as informações na sessão
        $_SESSION['user_nome'] = $usuario['nome']; 
        $_SESSION['user_email'] = $usuario['email']; 

        header("Location: index.php");
        exit;
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Email não existe.";
}

mysqli_close($conn);
?>