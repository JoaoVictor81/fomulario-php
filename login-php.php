<?php
session_start();
include ("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT nome, email, senha FROM cadastro WHERE email = '$email'"; 
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);
    
    if (password_verify($senha, $usuario['senha'])) {
        
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