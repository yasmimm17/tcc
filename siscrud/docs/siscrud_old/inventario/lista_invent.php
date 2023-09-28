<?php
    $conect = mysqli_connect('localhost', 'root', '', 'keepit');

    $sql = "select * from inventario;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Id</th><th>Quantidade</th><th>ID da mesa</th><th>ID do restaurante</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['id_invent'] . "</td>";
            echo "<td>" . $row['qtde'] . "</td>";
            echo "<td>" . $row['id_mesa'] . "</td>";
            echo "<td>" . $row['id_res'] . "</td>";
            echo "<td><a href='fedit_invent.php?id_invent=$row[0]'>Editar</a></td>";
            echo "<td><a href='excluir_invent.php?id_invent=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>