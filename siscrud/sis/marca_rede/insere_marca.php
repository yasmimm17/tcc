<?php 
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
    $nome_marca             = $_POST["nome_marca"];

    $sql = "insert into marca_rede values ";
    $sql .= "('0','$nome_marca');";
    
    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_rede&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_rede&msg=4');
        mysqli_close($con);
    }
?>

