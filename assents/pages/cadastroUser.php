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
  <link rel="stylesheet" href="../css/animation.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/cadastroUser.css">
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
      <form action="../cfgCadastroLogin/cadastraUser.php" method="POST">
        <mark>
          <div>
            <input type="text" id="nome" name="nome" required placeholder="Nome:">
            <input type="text" id="tell" name="tell" required placeholder="Tell:">
          </div>
          <div>
            <input type="email" id="email" name="email" required placeholder="Email:">
            <input type="text" id="cep" name="cep" required placeholder="Cep">
          </div>
        </mark>
        <input class="InSenha" type="password" id="senha" name="senha" required placeholder="Senha:"><br>
        <div class="footer">
          <p>
            Ao continuar, você aceita o <a href="#">Termo de adesão</a> e <a href="#">Política de Privacidade</a>.
          </p>
          <input type="submit" value="Cadastrar" class="btnCadastrar">
        </div>
      </form>
      <div class="text">
        <mark><img src="../imgs/icons/cursos.png" alt="img cursos"></mark>
        <h1>Sua <mark>Jornada</mark> Digital <br>Começa <mark>aqui!</mark></h2>
      </div>
    </div>

  </section>
</body>

</html>