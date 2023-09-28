<?php
    $conect = mysqli_connect('localhost', 'root', '', 'keepit');

    $sql = "select * from localidade;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Cep</th><th>Cidade</th><th>UF</th><th>Ativo</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['cep'] . "</td>";
            echo "<td>" . $row['cidade'] . "</td>";
            echo "<td>" . $row['uf'] . "</td>";
            if ($row['ativo'] == 1) {
               $ativ = "Sim";
           }
           else {
               $ativ = "Não";
           }
            echo "<td><a href='fedit_local.php?id_local=$row[0]'>Editar</a></td>";
            echo "<td><a href='excluir_local.php?id_local=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>