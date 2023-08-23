<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "select * from reserva_ondemand;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>QUANTIDADE DE PESSOAS</th> <th>CELULAR</th> <th>SITUAÇÃO DA RESERVA</th> <th>ID RESTAURANTE</th> <th>ID CLIENTE</th> <th>ATIVO</th> <th colspan='2'>AÇÕES</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['idreserva_ondemand']."</td>
          <td>".$info['qtde_pessoas']."</td>
          <td>".$info['cel_contato']."</td>
          <td>".$info['sit_reserva_ond']."</td>
          <td>".$info['id_res']."</td>
          <td>".$info['id_cli']."</td>
          <td>".$info['ativo']."</td>
          <td><a href = 'fedit_demand.php?idreserva_ondemand=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_demand.php?idreserva_ondemand=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>