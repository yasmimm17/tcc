<?php
    $idreserva_ondemand = (int) $_GET["idreserva_ondemand"];

    $con = mysqli_connect("localhost", "root", "", "keepit");

    $sql = "select * from reserva_ondemand where idreserva_ondemand = $idreserva_ondemand;";

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
    <form action="atualiza_demand.php" method="post">
        <div class="inputgroup">
            <input type="hidden" name="idreserva_ondemand" value='<?php echo $info['idreserva_ondemand']?>'>
        </div>

        <div class="inputgroup">
            <input type="number" name="qtde_pessoas" id="qtde_pessoas" placeholder="Quantidade de pessoas" value='<?php echo $info['qtde_pessoas']?>'>
            <img src="img/email.png">
        </div>

        <div class="inputgroup">
            <input type="text" name="cel_contato" id="cel_contato" placeholder="Celular" value='<?php echo $info['cel_contato']?>'>
            <img src="img/local.png">
        </div>

        <div class="inputgroup">
            <input type="text" name="sit_reserva_ond" id="sit_reserva_ond" placeholder="Situação da reserva" value='<?php echo $info['sit_reserva_ond']?>'>
            <img src="img/local.png">
        </div>

        <div class="inputgroup">
            <input type="text" name="id_res" id="id_res" placeholder="ID do restaurante" value='<?php echo $info['id_res']?>'>
            <img src="img/local.png">
        </div>

        <div class="inputgroup">
            <input type="text" name="id_cli" id="id_cli" placeholder="ID do cliente" value='<?php echo $info['id_cli']?>'>
            <img src="img/local.png">
        </div>

        <input type="submit" value="Atualizar">
    </form>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>