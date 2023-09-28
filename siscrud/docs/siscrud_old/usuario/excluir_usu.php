<?php
    $id_cli = $_GET['id_cli'];

    $conect = mysqli_connect('localhost', 'root', '', 'keepit');

    $sql = "delete from usuario where id_cli = $id_cli;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "Usuário excluído com sucesso!<br><hr>";
        include "lista_usu.php";
    }
    else {
        echo "Não foi possível excluir usuário no momento. Tente novamente mais tarde";
    }
?>