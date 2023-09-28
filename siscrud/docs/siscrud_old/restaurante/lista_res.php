<?php
    $conect = mysqli_connect('localhost', 'root', '', 'keepit');

    $sql = "select * from restaurante;";
    $resposta = mysqli_query($conect, $sql);

    if ($resposta) {
        echo "<table border=1>";
        echo "<th>Id</th><th>Nome</th><th>Número</th><th>Complemento</th><th>Sede</th><th>Cep</th><th>ID da Marca</th><th>Ativo</th><th colspan=2>Opções</th>";
        while ($row = mysqli_fetch_array($resposta)) {
            echo "<tr>";
            echo "<td>" . $row['id_res'] . "</td>";
            echo "<td>" . $row['nome_res'] . "</td>";
            echo "<td>" . $row['nr_res'] . "</td>";
            echo "<td>" . $row['comp_res'] . "</td>";
            echo "<td>" . $row['tipo_sede_res'] . "</td>";
            echo "<td>" . $row['cep'] . "</td>";
            echo "<td>" . $row['id_marca'] . "</td>";
            if ($row['ativo'] == 1) {
               $ativ = "Sim";
           }
           else {
               $ativ = "Não";
           }
            echo "<td><a href='fedit_res.php?id_res=$row[0]'>Editar</a></td>";
            echo "<td><a href='excluir_res.php?id_res=$row[0]'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "<table>";
    }
?>