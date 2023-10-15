<!DOCTYPE html>
<html>
<head>
    <title>Meu Perfil</title>
</head>
<body>
    <h2>Meu Perfil</h2>
    <?php
    session_start();
    if (isset($_SESSION["user_id"])) {
        require_once '../cfgCadastroLogin/conexao.php'; // Arquivo de conexão ao banco de dados

        $user_id = $_SESSION["user_id"];

        // Consulta SQL para obter informações do usuário
        $sql = "SELECT * FROM usuarios WHERE id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $nome = $row["nome"];
            $tell = $row["tell"];
            $email = $row["email"];
            $cep = $row["cep"];

            echo '<form action="../perfilUser/atualizarPerfil.php" method="POST">';
            echo '<label for="nome">Nome:</label>';
            echo '<input type="text" id="nome" name="nome" value="' . $nome . '" required>';
            echo '<br>';
            echo '<label for="tell">Tell:</label>';
            echo '<input type="text" id="tell" name="tell" value="' . $tell . '" required>';
            echo '<br>';
            echo '<label for="email">Email:</label>';
            echo '<input type="email" id="email" name="email" value="' . $email . '" required>';
            echo '<br>';
            echo '<label for="cep">CEP:</label>';
            echo '<input type="text" id="cep" name="cep" value="' . $cep . '" required>';
            echo '<br>';
            echo '<input type="submit" value="Atualizar Perfil">';
            echo '</form>';
        }
        
        $stmt->close();
    } else {
        echo 'Você não está logado. <a href="login.php">Faça login</a>';
    }
    ?>
</body>
</html>
