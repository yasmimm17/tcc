<?php
    $con = mysqli_connect("localhost", "root", "", "keepit");

    $id_reserva               = $_POST["id_reserva"];
    $horario             = $_POST["horario"];
    $qtde_pessoas            = $_POST["qtde_pessoas"];
    $obs             = $_POST["obs"];
    $cel_contato         = $_POST["cel_contato"];
    $id_res           = $_POST["id_res"];
    $id_cli         = $_POST["id_cli"];
    

    $sql = "update reserva_fixa set ";
    $sql .= "horario='$horario', qtde_pessoas='$qtde_pessoas', obs='$obs', cel_contato='$cel_contato',";
    $sql .=  "id_res='$id_res', id_cli='$id_cli'";
    $sql .= "where id_reserva = '$id_reserva';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        echo "foi";
        mysqli_close($con);
    }else{
       echo "nao foi";
        mysqli_close($con);
    }
?>
