<?php
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
    $lugares_mesa        = $_POST["lugares_mesa"];

    $sql = "insert into tipo_mesa values ";
    $sql .= "('0','$lugares_mesa');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_mesa&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_mesa&msg=4');
        mysqli_close($con);
    }
?>