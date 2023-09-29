<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "select * from reserva_fixa;";

     $resposta = mysqli_query($con, $sql);

     if ($resposta) {
          echo "<table border=1>";
          echo "<th>Id</th><th>Horário</th><th>Quantidade de pessoas</th><th>Observação</th><th>Celular</th><th>Situação</th><th>ID do Cliente</th><th>ID do Restaurante</th><th colspan=2>Opções</th>";
          while ($row = mysqli_fetch_array($resposta)) {
              echo "<tr>";
              echo "<td>" . $row['id_reserva'] . "</td>";
              echo "<td>" . $row['horario'] . "</td>";
              echo "<td>" . $row['qtde_pessoas'] . "</td>";
              echo "<td>" . $row['obs'] . "</td>";
              echo "<td>" . $row['cel_contato'] . "</td>";
              echo "<td>" . $row['sit_reserva_ond'] . "</td>";
              echo "<td>" . $row['id_cli'] . "</td>";
              echo "<td>" . $row['id_res'] . "</td>";
              echo "<td><a href='fedit_fixa.php?id_reserva=$row[0]'>Editar</a></td>";
              echo "<td><a href='excluir_fixa.php?id_reserva=$row[0]'>Excluir</a></td>";
              echo "</tr>";
          }
          echo "<table>";
      }
  ?>