<?php

include '../infra/conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['numero_telefone'];
    $senha = $_POST['senha'];


    $sql = "INSERT INTO funcionarios (nome, email, numero_telefone, senha) values (?,?,?,?)";
    $stmt = $conn-> prepare($sql);
    $stmt -> bind_param('sss', $nome,$email,$telefone,$senha);


    if($stmt->execute()){
        echo "Funcionario cadastrado ";
        echo '<a href="../index.php">voltar</a>';
    }else{
        echo "Erro ao cadastrar" . $stmt->error;
    }
   $stmt->close();
   exit;

   

}

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../assets/style/style.css">

    <link rel="icon" href="../assets/imgs/LogoDeTrain.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav>
            <h1 class="DE-TRAIN">DE-TRAIN</h1>
            <img id="icon" src="../assets/imgs/LogoDeTrain.png">
            <h1><a class="EntrarText" href="../public/home.html">VOLTAR</a></h1>
            <img id="LoginIcon" src="../assets/imgs/VoltarIcon.png">
        </nav>



    </header>

    <main>

        <div id="centrobloco">
            <div id="BlocoCadastro">

                <div class="Cadastro">

                    <h2 id="CadastroTitulo">Cadastro</h2>

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
                        <button class="ButtonCadastro">CADASTRAR FUNCIONÁRIO</button>

                    </form>

                </div>

            </div>
        </div>

    </main>
</body>

</html>