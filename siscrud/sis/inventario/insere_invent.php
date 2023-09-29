<?php
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
    $qtde        = $_POST["qtde"];
    $id_mesa       = $_POST["id_mesa"];
    $id_res     = $_POST["id_res"];

    $sql = "insert into inventario values ";
    $sql .= "('0','$qtde','$id_mesa','$id_res');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_invent&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_invent&msg=4');
        mysqli_close($con);
    }
?>