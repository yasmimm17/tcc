<?php
    $id_marca = (int) $_GET["id_marca"];

    $con = mysqli_connect("localhost", "root", "", "keepit");

    $sql = "select * from marca_rede where id_marca = $id_marca;";

    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $info = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ediçaõ de marca</title>

     <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form action="atualiza_marca.php" method="post">
        <div class="inputgroup">
            <input type="hidden" name="id_marca" value='<?php echo $info['id_marca']?>'>
        </div>

        <div class="inputgroup">
            <input type="text" maxlength="60" name="nome_marca" id="nome_marca" placeholder="Nome" value='<?php echo $info['nome_marca']?>'>
            <img src="img/nome.png">
        </div>

        <div class="inputgroup">
            <input type="image" name="logo_marca" id="logo_marca" placeholder="Logo" value='<?php echo $info['logo_marca']?>'>
            <img src="img/email.png">
        </div>

        <input type="submit" value="Atualizar">
    </form>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>