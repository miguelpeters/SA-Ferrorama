<?php

include '../infra/conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $sql = "INSERT INTO estacoes (id, nome) values (?,?)";
    $stmt = $conn-> prepare($sql);
    $stmt -> bind_param('ss', $id, $nome);

    if($stmt->execute()){
        echo "Estação cadastrada ";
        echo '<a href="../index.php">voltar</a>';
    }else{
        echo "Erro ao cadastrar" . $stmt->error;
    }
   $stmt->close();
   exit; 

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estação</title>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="icon" href="../assets/imgs/PageIcon.png" type="image/x-icon">
</head>

<body class="bodyCadastro">  

<div class="cadastro-detrain-topo">
    <a class="login-detrain-logo" href="../index.php">DE-TRAIN</a>
    <img id="icon-login" src="../assets/imgs/LogoDeTrain.png">
  </div>
    <main>

        <div id="centrobloco">
            <div id="BlocoCadastro">

                <div class="Cadastro">

                    <h2 id="CadastroTitulo">Cadastrar Estação</h2>

                    <form id="FormsCadastro">
                        <label for="id" id="CadastroLabel">ID</label>
                        <input type="text" id="cadastro-id" name="id" class="CadastroInput" placeholder="ID da estação">
                        <br>

                        <label for="nome" id="CadastroLabel">Nome</label>
                        <input type="text" id="cadastro-nome" name="nome" class="CadastroInput" placeholder="Nome da estação">
                        <br>

                        <br>
                        <button class="ButtonCadastro">CADASTRAR ESTAÇÃO</button>

                    </form>

                </div>

            </div>
        </div>

    </main>
</body>

</html>