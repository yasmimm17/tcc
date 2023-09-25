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

    $sql = "insert into produto values ";
    $sql .= "('0','$nome', '$preco', '$qtde', '$qtde_min', '$qtde_max','$dt_fab','$dt_valid','$obs');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \siscrud/index.php?page=lista_prod&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \siscrud/index.php?page=lista_prod&msg=4');
        mysqli_close($con);
    }
?>