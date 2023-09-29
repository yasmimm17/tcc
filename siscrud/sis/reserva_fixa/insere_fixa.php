<?php
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
    $id_reserva               = $_POST["id_reserva"];
    $horario             = $_POST["horario"];
    $qtde_pessoas            = $_POST["qtde_pessoas"];
    $obs             = $_POST["obs"];
    $cel_contato         = $_POST["cel_contato"];
    $situacao_reserva         = $_POST["situacao_reserva"];
    $id_res           = $_POST["id_res"];
    $id_cli         = $_POST["is_cli"];

    $sql = "insert into reserva_fixa values ";
    $sql .= "('0','$horario', '$qtde_pessoas', '$obs', '$cel_contato', '$situacao_reserva','$id_res','$id_cli');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_fixa&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_fixa&msg=4');
        mysqli_close($con);
    }
?>