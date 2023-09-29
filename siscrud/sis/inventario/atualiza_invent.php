<?php
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
    $id_invent          = $_POST["id_invent"];
    $qtde        = $_POST["qtde"];
    $id_mesa       = $_POST["id_mesa"];
    $id_res          = $_POST["id_res"];

    $sql = "update inventario set ";
    $sql .= "qtde='$qtde', id_mesa='$id_mesa', id_res='$id_res'";
    $sql .= "where id_invent = '$id_invent';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_invent&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_invent&msg=4');
        mysqli_close($con);
    }
?>
