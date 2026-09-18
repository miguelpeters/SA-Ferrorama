<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style/style.css">

    <link rel="icon" href="../assets/imgs/LogoDeTrain.png" type="image/x-icon">
</head>

<body class="bodyLogin">
<div class="login-detrain-topo">
    <a class="login-detrain-logo" href="../index.php">DE-TRAIN</a>
    <img id="icon-login" src="../assets/imgs/LogoDeTrain.png">
    
  </div>

  <div class="login-detrain-container">

    <div class="login-detrain-caixa">
      <p class="login-detrain-titulo">BEM <span class="verde">VINDO!</span></p>
      <p class="login-detrain-subtexto">Faça login para acessar o sistema e gerenciar seus trilhos.</p>

      <form action="login.php" method="post">

        <label for="email">Email</label><br>
        <input type="text" id="login-email" name="email" placeholder="seuemail@exemplo.com"><br><br>

        <label for="senha">Senha</label><br>
        <input type="password" id="login-senha" name="senha" placeholder="Sua Senha"><br><br>

        <p class="login-detrain-erro" id="mensagem-erro"></p>

        <button type="submit" class="login-detrain-botao">ENTRAR</button>

      </form>

      <p class="login-detrain-cadastro">
        Não tem uma conta? <a href="cadastro_usuario.php">Cadastre-se.</a>
      </p>
    </div>

    <div class="login-detrain-imagem">
      <img src="../assets/imgs/Imagem-login.png" alt="foto do trem">
    </div>

 <footer class= "login-rodape">

 </footer>


  <script src="script.js"></script>
</body>
</html>