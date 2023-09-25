<?php
    if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
    $nome_marca        = $_POST["nome_marca"];
    $logo_marca       = $_POST["logo_marca"];

    $sql = "insert into marca_rede values ";
    $sql .= "('0','$nome_marca','$logo_marca');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_marca&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_marca&msg=4');
        mysqli_close($con);
    }
?>