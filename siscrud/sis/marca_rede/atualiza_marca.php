<?php
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
    $id_marca          = $_POST["id_marca"];
    $nome_marca        = $_POST["nome_marca"];
    

    $sql = "update marca_rede set ";
    $sql .= "nome_marca='$nome_marca'";
    $sql .= "where id_marca = '$id_marca';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=4');
        mysqli_close($con);
    }
?>
