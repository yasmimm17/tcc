<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keep It</title>

    <!-- css -->
    <link rel="stylesheet" href="../css/style3.css">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
        include "config.php";
        if(!isset($_SESSION)) session_start();
        //Verfica se o id do usuário está definido na sessão
        if(isset($_SESSION["UsuarioID"])) {
            $usuario_id = $_SESSION["UsuarioID"];
        } else{
            //Redireciona o usuário para o login se não estiver logado
            header("location: login.php");
            exit;
        }

        include "header.php";
    ?>
    <main class="home">
        <h1 style="color: #005A09; font-weight: 900; left: 30px; margin-left: 2.2em; margin-bottom: 2em">Restaurantes disponíveis:</h1>

        <div class="row home1">
            <div class="col-md-4 ">
                <div>
                    <a href="outback.php"><img src="../img/outback.png"></a>
                    <p style="font-weight: bold; font-size: 1.5em">Outback</p>
                    <p>R. Fonseca, 240 - Bangu</p>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <a href="nossolugar.php"><img src="../img/nossolugar.png"></a>
                    <p style="font-weight: bold; font-size: 1.5em">Nosso Lugar</p>
                    <p>R. Ambrósio, 363 - Mesquita</p>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <a href="paris6.php"><img src="../img/paris6.png"></a>
                    <p style="font-weight: bold; font-size: 1.5em">Paris 6</p>
                    <p>Av. Lúcio Costa, 3150 - Barra da Tijuca</p>
                </div>
            </div>
        </div>

        <div class="row home2">
            <div class="col-md-4">
                <div>
                    <a href="chifa.php"><img src="../img/chifa.png"></a>
                    <p style="font-weight: bold; font-size: 1.5em">Chifa</p>
                    <p>R. Rodolfo Dantas, 26 - Copacabana</p>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <a href="mariah.php"><img src="../img/mariah.png"></a>
                    <p style="font-weight: bold; font-size: 1.5em">Mariah</p>
                    <p>R. Tupiaçu, 193 - Padre Miguel</p>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <a href="parme.php"><img src="../img/parme.png"></a>
                    <p style="font-weight: bold; font-size: 1.5em">Parmê</p>
                    <p>R. Dias da Cruz, 291 - Méier</p>
                </div>
            </div>
        </div>
    </main>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html> 