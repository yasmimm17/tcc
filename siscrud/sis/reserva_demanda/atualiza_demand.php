<?php
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
    $idreserva_ondemand          = $_POST["idreserva_ondemand"];
    $qtde_pessoas        = $_POST["qtde_pessoas"];
    $cel_contato       = $_POST["cel_contato"];
    $sit_reserva_ond          = $_POST["sit_reserva_ond"];
    $id_cli        = $_POST["id_cli"];
    $id_res        = $_POST["id_res"];

    $sql = "update reserva_ondemand set ";
    $sql .= "qtde_pessoas='$qtde_pessoas', cel_contato='$cel_contato', sit_reserva_ond='$sit_reserva_ond', id_cli='$id_cli', id_res='$id_res'";
    $sql .= "where idreserva_ondemand = '$idreserva_ondemand';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_demand&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_demand&msg=4');
        mysqli_close($con);
    }
?>