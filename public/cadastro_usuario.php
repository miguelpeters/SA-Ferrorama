<?php


?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
    <link rel="stylesheet" href="../assets/style/style.css">

    <link rel="icon" href="../assets/imgs/LogoDeTrain.png" type="image/x-icon">
</head>

<body>
    <header class="header-cadastro">
        <nav>
            <a class="login-detrain-logo" href="../index.php">DE-TRAIN</a>
            <img id="icon" src="../assets/imgs/LogoDeTrain.png">
        </nav>



    </header>

    <main>

        <div id="centrobloco">
            <div id="BlocoCadastro">

                <div class="Cadastro">

                    <h2 id="CadastroTitulo">Cadastro de usuário</h2>

                    <form id="FormsCadastro">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" class="CadastroInput" placeholder="Insira seu nome">
                        <br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" email="email" class="CadastroInput" placeholder="Insira seu email">
                        <br>

                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" telefone="telefone" class="CadastroInput" placeholder="Insira seu Telefone">
                        <br>

                        <label for="senha">Senha</label>
                        <input type="password" id="senha" senha="senha" class="CadastroInput" placeholder="Insira sua senha">
                        <br>
                        <br>
                        <button class="ButtonCadastro">CADASTRAR USUÁRIO</button>

                    </form>

                </div>

            </div>
        </div>

    </main>
</body>

</html>