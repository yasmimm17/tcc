<?php
    session_start();

    if(isset($_SESSION["cliente"]) && is_array($_SESSION["cliente"])){
        $adm = $_SESSION["cliente"][1];
        $nome = $_SESSION["cliente"][0];

    }else{
        echo "<script>window.location = '../index.html'</script>";
    }
?>

<html>
    <head>
        <title>Dashboard - <?php echo $nome; ?></title>
    </head>
    <body>
        <a href="">sair</a>
    </body>
</html>