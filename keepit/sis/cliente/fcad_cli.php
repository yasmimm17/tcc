<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keep It</title>

    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- css  -->
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<header class="cad">
        <nav>
            <img src="../../img/Keep It.png">
        </nav>
    </header>
    <main class="cadastro">
        <div class="cad">
            <div class="ola">
                <h2>Olá!</h2>
                <h5>Esperamos por você!</h5>
            </div>

            <form action="insere_cli.php" method="post">
                <div class="inputgroup">
                    <input type="text" maxlength="60" name="nome" id="nome" placeholder="Nome">
                    <img src="../../img/nome.png">
                </div>

                <div class="inputgroup">
                    <input type="email" maxlength="30" name="email" id="email" placeholder="Email">
                    <img src="../../img/email.png">
                </div>

                <div class="inputgroup">
                    <input type="password" maxlength="10" name="senha" id="senha" placeholder="Senha">
                    <img src="../../img/senha.png">
                </div>

                <button type="button" onclick="openmodal()" class="open__modal">Localidade</button>

                <div class="modal__container">
                    <div class="modal__content">
                        <span onclick="closemodal()" class="close__modal">x</span>
                        <input type="text" name="cep" id="cep" placeholder="Cep" >
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" >
                        <input type="text" name="uf" id="uf" placeholder="UF" >
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Cadastrar">
                    
                <p>Já tem uma conta? <a href="login.html">Entrar</a></p>
            </form>
            
        </div>
    </main>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="../../js/script.js"></script>
</body>
</html>