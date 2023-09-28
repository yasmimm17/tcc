<?php
    $conect = mysqli_connect('localhost', 'root', '', 'keepit');

    $sql = "select * from tipo_mesa;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Id</th><th>Lugares da mesa</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['id_mesa'] . "</td>";
            echo "<td>" . $row['lugares_mesa'] . "</td>";
            echo "<td><a href='fedit_mesa.php?id_mesa=$row[0]'>Editar</a></td>";
            echo "<td><a href='excluir_mesa.php?id_mesa=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>