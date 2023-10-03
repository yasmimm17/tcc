<?php
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
    $extensao = strtolower(substr($_FILES['logo_marca'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "../img/perfil/";

    move_uploaded_file($_FILES['logo_marca']['tmp_name'], $diretorio.$novo_nome);

    if ($_FILES['logo_marca'] == "") {
        $sql = "insert into marca_rede values ";
        $sql .= "(0, '$nome_marca')";
    } else {
        $sql = "insert into marca_rede values ";
        $sql .= "(0, '$nome_marca' '$novo_nome')";
    }
    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=4');
        mysqli_close($con);
    }
?>