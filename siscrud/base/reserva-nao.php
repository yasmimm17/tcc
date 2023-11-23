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

    <main class="reserva">
        <h1 style="font-weight: 900; color: #005A09;">OoPss</h1>
        <h3 style="font-weight: bolder;">Não encontramos nenhuma reserva :(</h3>
    </main>

    <script src="js/script.js"></script>
</body>
</html>