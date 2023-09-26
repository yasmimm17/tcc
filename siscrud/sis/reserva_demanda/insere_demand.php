<?php
    if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
    $qtde_pessoas             = $_POST["qtde_pessoas"];
    $cel_contato          = $_POST["cel_contato"];
    $sit_reserva_ond          = $_POST["sit_reserva_ond"];
    $id_cli          = $_POST["id_cli"];
    $id_res           	  = $_POST["id_res"];

    $sql = "insert into reserva_ondemand values ";
    $sql .= "('0','$qtde_pessoas','$cel_contato','$sit_reserva_ond','$id_cli','$id_res');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_demand&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_demand&msg=4');
        mysqli_close($con);
    }
?>