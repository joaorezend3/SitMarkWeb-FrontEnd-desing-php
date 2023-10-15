<?php
session_start();
require_once 'conexao.php'; // Arquivo de conexão ao banco de dados

if (isset($_SESSION["user_id"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_SESSION["user_id"];
    $nome = $_POST["nome"];
    $tell = $_POST["tell"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];

    // Consulta SQL para atualizar as informações do usuário
    $sql = "UPDATE usuarios SET nome = ?, tell = ?, email = ?, cep = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nome, $tell, $email, $cep, $user_id);

    if ($stmt->execute()) {
        echo "Perfil atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o perfil: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
