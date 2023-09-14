<?php
    $id_mesa = (int) $_GET["id_mesa"];

    $con = mysqli_connect("localhost", "root", "", "keepit");

    $sql = "select * from tipo_mesa where id_mesa = $id_mesa;";

    $result = mysqli_query($con, $sql) or die (mysqli_error($con));

    $info = mysqli_fetch_array($result);
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
    <form action="atualiza_cli.php" method="post">
        <div class="inputgroup">
            <input type="hidden" name="id_mesa" value='<?php echo $info['id_mesa']?>'>
        </div>

        <div class="inputgroup">
            <input type="number" name="lugares_mesa" id="lugares_mesa" placeholder="Lugares" value='<?php echo $info['lugares_mesa']?>'>
            <img src="img/email.png">
        </div>

        <input type="submit" value="Atualizar">
    </form>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>