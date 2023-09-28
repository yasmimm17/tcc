<?php
    $conect = mysqli_connect('localhost', 'root', '', 'keepit');

    $sql = "select * from usuario;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Id</th><th>Nome</th><th>E-mail</th><th>Senha</th><th>Cep</th><th>Nível</th><th>Ativo</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['id_cli'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['senha'] . "</td>";
            echo "<td>" . $row['cep'] . "</td>";
            switch ($row['nivel']) {
                case 1: $niv = "Cliente"; break;
                case 2: $niv = "Administrador do Restaurante"; break;
                case 3: $niv = "Administrador Geral"; break;
            }
            echo "<td>" . $niv . "</td>";
            if ($row['ativo'] == 1) {
                $ativ = "Sim";
            }
            else {
                $ativ = "Não";
            }
            echo "<td>" . $ativ . "</td>";
            echo "<td><a href='fedit_usu.php?id_cli=$row[0]'>Editar</a></td>";
            echo "<td><a href='excluir_usu.php?id_cli=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>