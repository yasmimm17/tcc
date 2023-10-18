

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
    <link rel="stylesheet" href="../../css/style3.css">
</head>
<body>
    <header class="cad">
        <nav>
            <img src="../../img/Keep It.png">
        </nav>
    </header>

    <main class="cadastro">
        <div class="cad">
            <div> <?php include "mensagens.php"; ?> </div>
            <div class="ola" style="position: relative;">
                <h2>Olá!</h2>
                <h5>Esperamos por você!</h5>
            </div>

            <form action="?page=insere_usu" method="post">
                <div style="position: relative; ">
                    <div class="inputgroup">
                        <input type="text" maxlength="60" name="nome" id="nome" placeholder="Nome">
                        <img src="../../img/nome.png">
                    </div>
                    <div class="inputgroup">
                        <select class="form-control" name="nivel" id="nivel" placeholder="Nível">
                            <option checked value="1" >Cliente</option>
                            <option disabled value="2">Adm Restaurante</option>
                            <option disabled value="3">Adm Geral</option>
                        </select>
                        <img src="../../img/nivel.png">
                    </div>
                    <div class="inputgroup">
                        <input type="email" maxlength="30" name="email" id="email" placeholder="Email">
                        <img src="../../img/email.png">
                    </div>
                    <div class="inputgroup">
                        <input type="password" maxlength="10" name="senha" id="senha" placeholder="Senha">
                        <img src="../../img/senha.png">
                    </div>
                </div>

                <div id="actions">
                    <input type="submit" class="btn btn-primary" value="Cadastrar" style="position: relative">
                </div>
                    
                <p style="position: relative; ">Já tem uma conta? <a href="../../base/login.php">Entrar</a></p>
            </form>
            
        </div>
    </main>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="../../js/script.js"></script>
</body>
</html>