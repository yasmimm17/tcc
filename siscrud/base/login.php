<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keep It</title>

  <!-- css -->
  <link rel="stylesheet" href="../css/style3.css">
  <!--bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header class="cad">
        <nav>
            <img src="../img/Keep It.png">
        </nav>
    </header>
    <main class="cadastro">
        <div class="cad">
            <div class="ola">
                <h2>Olá!</h2>
                <h5>Bem vindo(a) de volta!</h5>
            </div>

            <form action="validacao.php" method="post">

                <div class="inputgroup">
                    <input type="email" maxlength="50" name="email" id="email" placeholder="Email">
                    <img src="../img/email.png">
                </div>

                <div class="inputgroup">
                    <input type="password" maxlength="15" name="senha" id="senha" placeholder="Senha">
                    <img src="../img/senha.png">
                </div>

                <input type="submit" value="Entrar">
            
                <p style="width: 18em;">Não tem uma conta? <a href="../sis/usuario/cadastro_usu.php">Cadastre-se</a></p>
            </form>
        </div>
    </main>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>