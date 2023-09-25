<?php
    if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
    $nome        = $_POST["nome_disc"];
    $sigla       = $_POST["sigla_disc"];
    $ch     = $_POST["ch_disc"];

    $sql = "insert into disciplina values ";
    $sql .= "('0','$nome','$sigla','$ch');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_disc&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_disc&msg=4');
        mysqli_close($con);
    }
?>