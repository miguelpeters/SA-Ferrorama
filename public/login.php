<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <div>
            <div class="flex">
                <div class="blocoLogin">
                    <div>

                        <h2 id="loginTitulo">BEM VINDO!</h2>


                        <form id="FormsLogin">
                            <label for="email"></label>
                            <input type="email" id="email" class="loginInput" placeholder="EMAIL:">
                            <br>

                            <label for="password"></label>
                            <input type="password" id="password" class="loginInput" placeholder="SENHA:">
                            <br>


                            <a class="loginLink" href="">ESQUECI MINHA SENHA</a>
                            <br>

                            <div class="flex">
                                <p class="loginLink">MANTENHA-ME CONECTADO</p>
                                <input id="checkLogin" type="checkbox">
                            </div>



                            <br>
                            <button id="loginLad" class="ButtonCadastro">ENTRAR</button>



                        </form>

                    </div>

                </div>

                <div>
                    <p class="loginImgText">CONHEÇA NOSSA LINHAS!</p>
                    <div class="ImageLogin">
                        <img id="logImg" src="../assets/imgs/LoginImage.png" alt="Trem Expositivo">
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>

</html>