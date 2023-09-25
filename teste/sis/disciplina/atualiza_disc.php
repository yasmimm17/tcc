<?php
    if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
    $id          = $_POST["id_disc"];
    $nome        = $_POST["nome_disc"];
    $sigla       = $_POST["sigla_disc"];
    $ch          = $_POST["ch_disc"];

    $sql = "update disciplina set ";
    $sql .= "nome_disc='$nome', sigla_disc='$sigla', ch_disc='$ch'";
    $sql .= "where id_disc = '$id';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_disc&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_disc&msg=4');
        mysqli_close($con);
    }
?>
