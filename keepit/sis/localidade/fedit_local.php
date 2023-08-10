<?php
    $cep (int) $_GET["cep"];

    $con = mysqli_connect("localhost", "root", "", "keepit");

    $sql = "select * from localidade where cep = $cep;";

    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $info = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ediçaõ de localidade</title>

     <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form action="atualiza_local.php" method="post">
        <div class="inputgroup">
            <input type="hidden" name="cep" value='<?php echo $info['cep']?>'>
        </div>

        <div class="inputgroup">
            <input type="text" maxlength="10" name="cep" id="cep" placeholder="cep" value='<?php echo $info['cep']?>'>
            <img src="img/nome.png">
        </div>

        <div class="inputgroup">
            <input type="text" maxlength="60" name="logradouro" id="logradouro" placeholder="logradouro" value='<?php echo $info['logradouro']?>'>
            <img src="img/email.png">
        </div>

        <div class="inputgroup">
            <input type="text" maxlength="60" name="bairro" id="bairro" placeholder="bairro" value='<?php echo $info['bairro']?>'>
            <img src="img/senha.png">
        </div>

        <div class="inputgroup">
            <input type="text" maxlength="60" name="cidade" id="cidade" placeholder="cidade" value='<?php echo $info['cidade']?>'>
            <img src="img/local.png">
        </div>

        <div class="inputgroup">
            <input type="text" maxlength="2" name="uf" id="uf" placeholder="uf" value='<?php echo $info['uf']?>'>
            <img src="img/local.png">
        </div>

        <input type="submit" value="Atualizar">
    </form>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>