<?php
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
    $id_mesa          = $_POST["id_mesa"];
    $lugares_mesa        = $_POST["lugares_mesa"];

    $sql = "update tipo_mesa set ";
    $sql .= "lugares_mesa='$lugares_mesa'";
    $sql .= "where id_mesa = '$id_mesa';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_mesa&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_mesa&msg=4');
        mysqli_close($con);
    }
?>
