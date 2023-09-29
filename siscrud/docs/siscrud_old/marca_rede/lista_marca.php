<?php
    $conect = mysqli_connect('localhost', 'root', '', 'keepit');

    $sql = "select * from marca_rede;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Id</th><th>Nome da Marca</th><th>Logo da Marca</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['id_marca'] . "</td>";
            echo "<td>" . $row['nome_marca'] . "</td>";
            echo "<td>" . $row['logo_marca'] . "</td>";
            echo "<td><a href='fedit_marca.php?id_marca=$row[0]'>Editar</a></td>";
            echo "<td><a href='excluir_marca.php?id_marca=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>