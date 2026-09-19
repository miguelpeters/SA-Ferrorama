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

<body>    
    <header>
        <nav>
            <h1 class="DE-TRAIN">DE-TRAIN</h1>
            <img id="icon" src="../assets/imgs/LogoDeTrain.png">
        </nav>
    </header>

    <main>

    <main>

        <div id="centrobloco">
            <div id="BlocoCadastro">

                <div class="Cadastro">

                    <h2 id="CadastroTitulo">Cadastrar Estação</h2>

                    <form id="FormsCadastro">
                        <label for="id">ID</label>
                        <input type="text" id="id" name="id" class="CadastroInput" placeholder="Insira o ID da estação">
                        <br>

                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" class="CadastroInput" placeholder="Insira o nome da estação">
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