<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "select * from reserva_ondemand;";

     $resposta = mysqli_query($con, $sql);

     if ($resposta) {
          echo "<table border=1>";
          echo "<th>Id</th><th>Quantidade de pessoas</th><th>Celular</th><th>Situação</th><th>ID do Cliente</th><th>ID do Restaurante</th><th colspan=2>Opções</th>";
          while ($row = mysqli_fetch_array($resposta)) {
              echo "<tr>";
              echo "<td>" . $row['idreserva_ondemand'] . "</td>";
              echo "<td>" . $row['qtde_pessoas'] . "</td>";
              echo "<td>" . $row['cel_contato'] . "</td>";
              echo "<td>" . $row['sit_reserva_ond'] . "</td>";
              echo "<td>" . $row['id_cli'] . "</td>";
              echo "<td>" . $row['id_res'] . "</td>";
              echo "<td><a href='fedit_demand.php?idreserva_ondemand=$row[0]'>Editar</a></td>";
              echo "<td><a href='excluir_demand.php?idreserva_ondemand=$row[0]'>Excluir</a></td>";
              echo "</tr>";
          }
          echo "<table>";
      }
  ?>