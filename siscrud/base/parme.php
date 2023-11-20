<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keep It</title>
    <link rel="stylesheet" href="../css/style3.css">
    <style>
        body{
            margin: 0;
            padding: 0;
        }

        header img{
            height: 15em;
            width: 100%
        }

        h4{
            margin-left: -3em;
        }

        #img{
            border-radius: 5em;
        }

    </style>
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header style="height: 15em;">
        <img src="../img/parme-header.png">
    </header>
    
    <div  class="container row" style="padding-top: 2em">
        <div class="col-2">
            <img src="../img/parme-icon.jpg" id="img" style="height: 7em; width: 7em">
        </div>

        <div class="col-3" style="margin-top: 2em;">
            <h4>Parmê - Méier</h4>
        </div>
    </div>

    <?php
        include "../sis/reserva_fixa/cad_reserva.php";
    ?>
</body>
</html>