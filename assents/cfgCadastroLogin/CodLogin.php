<?php
session_start();
require_once 'conexao.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT id, nome, senha FROM usuarios WHERE email = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["senha"];

        if (password_verify($senha, $hashed_password)) {
            // Login bem-sucedido
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_nome"] = $row["nome"];
            header("Location: ../pages/pagina_de_boas_vindas.php"); 
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
    
    $stmt->close();
}

$conn->close();
