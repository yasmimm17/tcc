<?php
    if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
    $id               = $_POST["id_prod"];
    $nome             = $_POST["nome_prod"];
    $preco            = $_POST["preco_prod"];
    $qtde             = $_POST["qtde_prod"];
    $qtde_min         = $_POST["qtde_min_estoque"];
    $qtde_max         = $_POST["qtde_max_estoque"];
    $dt_fab           = $_POST["dt_fab_prod"];
    $dt_valid         = $_POST["dt_valid_prod"];
    $obs              = $_POST["obs_prod"];

    $sql = "update produto set ";
    $sql .= "nome_prod='$nome',preco_prod='$preco', qtde_prod='$qtde', qtde_min_estoque='$qtde_min',";
    $sql .= "qtde_max_estoque='$qtde_max', dt_fab_prod='$dt_fab', dt_valid_prod='$dt_valid', obs_prod='$obs'";
    $sql .= "where id_prod = '$id';";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_prod&msg=2');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_prod&msg=4');
        mysqli_close($con);
    }
?>
