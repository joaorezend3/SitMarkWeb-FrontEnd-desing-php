<?php
require_once '../cfgCadastroLogin/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos ALR</title>
    <link rel="stylesheet" href="../css/cfg.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/animation.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo-holder logo-8">
                <a href="../../index.html">
                    <h3>ALR <span>ALR</span></h3>
                </a>
            </div>
            <ul>
                <a href="marketing.html">
                    <li>Marketing</li>
                </a>
                <a href="cursos.index.html">
                    <li>Cursos</li>
                </a>
                <a href="#">
                    <li>Sobre Nós</li>
                </a>
                <a href="cadastroUser.php" class="btn-navBar"> Cadastre-se</a>
                <a href="login.php" class="btn-navBar">Entrar</a>

            </ul>
        </nav>
    </header>
    <section>
        <div class="card">
            <div class="text">
                <mark><img src="../imgs/icons/marketing.png" alt="img cursos"></mark>
                <h1>A <mark>Chave</mark><br> para o <mark>Crescimento</mark><br><mark>Online</mark> está em Nossos Cursos.</h2>
            </div>

            <form action="../cfgCadastroLogin/CodLogin.php" method="POST" id="loginForm">
                <mark>
                    <input type="email" id="email" name="email" required placeholder="Email">
                    <input class="InSenha" type="password" id="senha" name="senha" required placeholder="Senha">
                    <br>
                    <input type="submit" value="Login" class="loginBtn">
                </mark>
                <p>
                    <span id="erroMsg" class="erro-msg"></span>
                    Ao continuar, você aceita o <a class="link" href="#">Termo de adesão</a> e <br><a class="link" href="#">Política de Privacidade</a>.
                </p>
            </form>

        </div>

    </section>
</body>

</html>