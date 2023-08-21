<?php
    $id_res = (int) $_GET["id_res"];

    $con = mysqli_connect("localhost", "root", "", "keepit");

    $sql = "select * from restaurante where id_res = $id_res;";

    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $info = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ediçaõ de restaurante</title>

     <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form action="atualiza_res.php" method="post">
        <div class="inputgroup">
            <input type="hidden" name="id_res" value='<?php echo $info['id_res']?>'>
        </div>

        <div class="inputgroup">
            <input type="text" maxlength="60" name="nome_res" id="nome_res" placeholder="Nome" value='<?php echo $info['nome_res']?>'>
            <img src="img/nome.png">
        </div>

        <div class="inputgroup">
            <input type="number" name="nr_res" id="nr_res" placeholder="Número" value='<?php echo $info['nr_res']?>'>
            <img src="img/email.png">
        </div>

        <div class="inputgroup">
            <input type="text" maxlength="60" name="comp_res" id="comp_res" placeholder="Complemento" value='<?php echo $info['comp_res']?>'>
            <img src="img/senha.png">
        </div>

        <div class="inputgroup">
            <input type="text" name="tipo_sede_res" id="tipo_sede_res" placeholder="Sede" value='<?php echo $info['tipo_sede_res']?>'>
            <img src="img/local.png">
        </div>

        <div class="inputgroup">
            <input type="text" name="usuario" id="usuario" placeholder="Usuário" value='<?php echo $info['usuario']?>'>
            <img src="img/local.png">
        </div>

        <div class="inputgroup">
            <input type="password" name="senha" id="senha" placeholder="Senha" value='<?php echo $info['senha']?>'>
            <img src="img/local.png">
        </div>

        <div class="inputgroup">
            <input type="number" name="nivel" id="nivel" placeholder="Nível" value='<?php echo $info['nivel']?>'>
            <img src="img/local.png">
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