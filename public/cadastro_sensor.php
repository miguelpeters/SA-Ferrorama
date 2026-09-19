<?php

include '../infra/conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $trem_id = $_POST['trem_id'];

    $sql = "INSERT INTO sensores (id, nome, tipo, trem_id) values (?,?,?,?)";
    $stmt = $conn-> prepare($sql);
    $stmt -> bind_param('ssss', $id, $nome, $tipo, $trem_id);

    if($stmt->execute()){
        echo "Sensor cadastrado ";
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
    <title>Cadastro de Sensor</title>
    <link rel="stylesheet" href="../assets/style/style.css">

    <link rel="icon" href="../assets/imgs/LogoDeTrain.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav>
            <h1 class="DE-TRAIN">DE-TRAIN</h1>
            <img id="icon" src="../assets/imgs/LogoDeTrain.png">
        </nav>


    </header>

    <main>

        <div id="centrobloco">
            <div id="BlocoCadastro">

                <div class="Cadastro">

                    <h2 id="CadastroTitulo">Cadastrar Sensor</h2>

                    <form id="FormsCadastro">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" class="CadastroInput" placeholder="Insira seu nome">
                        <br>

                        <label for="ID">ID</label>
                        <input type="text" id="Id" class="CadastroInput" placeholder="Insira o ID">
                        <br>

                        <label for="tipo">Tipo</label>
                        <input type="text" id="tipo" class="CadastroInput" placeholder="Insira o Tipo do Sensor">
                        <br>
                        <br>
                        <button class="ButtonCadastroS">CADASTRAR SENSOR</button>

                    </form>

                </div>

            </div>
        </div>

    </main>
</body>

</html>