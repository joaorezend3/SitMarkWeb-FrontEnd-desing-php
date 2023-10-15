<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $tell = $_POST["tell"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Criptografar a senha

    // SQL para inserir os dados do usuário na tabela
    $sql = "INSERT INTO usuarios (nome, tell, email, cep, senha) VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nome, $tell, $email, $cep, $senha);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
