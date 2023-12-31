<?php
    $id_cli = (int) $_GET["id_cli"];

    $conect = mysqli_connect("localhost", "root", "", "keepit");

    $sql = "select * from usuario where id_cli = $id_cli;";
    $resposta = mysqli_query($conect, $sql) or die(mysqli_error($conect));
    $info = mysqli_fetch_array($resposta);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ediçaõ de cliente</title>

     <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form action="atualiza_usu.php" method="post">
        <div class="inputgroup">
            <input type="hidden" name="id_cli" value='<?php echo $info['id_cli']?>'>
        </div>

        <div class="inputgroup">
            <input type="text" maxlength="60" name="nome" id="nome" placeholder="Nome" value='<?php echo $info['nome']?>'>
            <img src="img/nome.png">
        </div>

        <div class="inputgroup">
            <input type="email" maxlength="30" name="email" id="email" placeholder="Email" value='<?php echo $info['email']?>'>
            <img src="img/email.png">
        </div>

        <div class="inputgroup">
            <input type="password" maxlength="10" name="senha" id="senha" placeholder="Senha" value='<?php echo $info['senha']?>'>
            <img src="img/senha.png">
        </div>

        <div class="inputgroup">
            <input type="text" name="cep" id="cep" placeholder="Cep" value='<?php echo $info['cep']?>'>
            <img src="img/local.png">
        </div>

        <input type="submit" value="Atualizar">
    </form>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>