<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keep It</title>

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!--bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header class="cad">
        <nav>
            <img src="img/Keep It.png" alt="">
        </nav>
    </header>
    <main class="cadastro">
        <div class="cad">
            <div class="ola">
                <h2>Olá!</h2>
                <h5>Esperamos por você!</h5>
            </div>

            <form action="insere_local.php" method="post">
                <div class="inputgroup">
                    <input type="text" maxlength="10" name="cep" id="cep" placeholder="cep">
                    <img src="img/nome.png">
                </div>

                <div class="inputgroup">
                    <input type="text" maxlength="60" name="logradouro" id="logradouro" placeholder="logradouro">
                    <img src="img/email.png">
                </div>

                <div class="inputgroup">
                    <input type="text" maxlength="60" name="bairro" id="bairro" placeholder="bairro">
                    <img src="img/senha.png">
                </div>

                <div class="inputgroup">
                    <input type="text" maxlength="60" name="cidade" id="cidade" placeholder="cidade">
                    <img src="img/local.png">
                </div>

                <div class="inputgroup">
                    <input type="text" maxlength="2" name="uf" id="uf" placeholder="uf">
                    <img src="img/local.png">
                </div>

                <input type="submit" value="Cadastrar">
            </form>
            
        </div>
    </main>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>