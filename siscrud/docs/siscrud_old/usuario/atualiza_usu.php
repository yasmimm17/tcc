<?php
    $conect = mysqli_connect('localhost', 'root', '', 'keepit');

    $id_cli = $_POST['id_cli'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $nivel = $_POST['nivel'];
    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];
        $sql = "update usuario set email='$email', senha=sha1('$senha'), nivel='$nivel', cep='$cep', nome='$nome' where id_cli=$id_cli;";
    }
    else {
        $sql = "update usuario set email='$email', nivel='$nivel', cep='$cep', nome='$nome' where id_cli=$id_cli;";
    }

    
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Usuário atualizado com sucesso!<br><hr>";
        include "lista_usu.php";
    }
    else {
        echo "Não foi possível excluir usuário no momento. Tente novamente mais tarde";
    }
?>