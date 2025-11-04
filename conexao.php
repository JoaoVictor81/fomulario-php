<?php
$servername = "localhost";
$username = "root";     // padrão do XAMPP
$password = "";         // senha geralmente vazia no XAMPP
$database = "formulario"; // coloque o nome exato do seu banco

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
