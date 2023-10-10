<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta ALR</title>
    <link rel="stylesheet" href="../css/cfg.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/cadastroUser.css">
</head>

<body>
    <header>
        <nav>
            <a href="../../index.html">
                <h1 class="logo">ALR</h1>
            </a>
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
                <a href="@" class="btn-navBar"> Cadastre-se</a>
                <a href="@" class="btn-navBar"> Conectar</a>
            </ul>
        </nav>
    </header>
</body>
<section>
    <div class="card">
        <form action="../sistens/sistensCadastro/" method="POST">
            <input type="text" id="nome" name="nome" required placeholder="Nome">

            <input type="email" id="email" name="email" required placeholder="Email: Maria@gamail.com">

            <input type="text" id="tell" name="tell" required placeholder="tell: (00) 0 0000-0000">

            <input type="text" id="cep" name="cep" required placeholder="cep">
            <input type="password" id="senha" name="senha" required placeholder="Senha: ****">

            <input type="submit" value="Cadastrar" class="btnCadastrar">
            <p>
                Ao continuar, você aceita o <a href="#">Termo de adesão</a> e <a href="#">Política de Privacidade</a>.
            </p>
        </form>
        <svg class="pointer-events-none" style=" left: -6.60377px; top: -6.60377px; width: 80px; height: 92px; display: inherit; z-index: 2;"><g transform="matrix(0.4716981132075472,0,0,0.4716981132075472,6.60377358490566,6.60377358490566)"><image pointer-events="none" visibility="visible" display="none" style="cursor: text;"></image><path class="ShapeMoveHandle" pointer-events="all" visibility="hidden" aria-label="Imagem" display="inherit" d="M-12 -12 L153 -12 L153 178 L-12 178 Z" stroke-width="0" style="cursor: move;"></path><path pointer-events="all"  role="textbox" display="none" style="cursor: text;"></path></g></svg>
    </div>
</section>

</html>