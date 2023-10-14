<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos ALR</title>
    <link rel="stylesheet" href="../css/cfg.css">
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
            <a href="@" class="btn-navBar"> Conectar</a>
          </ul>
        </nav>
      </header>
    <section>
        <div class="card">
            <form action="" method="POST">
                <div>
                    <input type="text" id="nome" name="nome" required placeholder="Nome">
                    <input type="text" id="tell" name="tell" required placeholder="tell: (00) 0 0000-0000">
                </div>
                <div>
                    <input type="email" id="email" name="email" required placeholder="Email: Maria@gamail.com">
                    <input type="text" id="cep" name="cep" required placeholder="cep">
                </div>
                <input type="password" id="senha" name="senha" required placeholder="Senha: ****"><br>
                <div>
                <input type="submit" value="Cadastrar" class="btnCadastrar">
                <p>
                    Ao continuar, você aceita o <a href="#">Termo de adesão</a> e <a href="#">Política de Privacidade</a>.
                </p>
                </div>  
            </form>
        </div>

    </section>
</body>
<script src="../JS/animation.js"></script>

</html>