<?php

 

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$numero = $_POST['numero'];

// Prepara e executa o SQL
$sql = "INSERT INTO cadastro (nome, email, senha, numero) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nome, $email, $senha, $numero);

if ($stmt->execute()) {
    echo "<script>
            alert('Cadastro com sucesso!');
            window.location.href='login.html';
            </script>";

} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
