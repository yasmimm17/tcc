<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "select * from tipo_mesa;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>Lugares</th> <th>ATIVO</th> <th colspan='2'>AÇÕES</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id_mesa']."</td>
          <td>".$info['lugares_mesa']."</td>
          <td>".$info['ativo']."</td>
          <td><a href = 'fedit_mesa.php?id_mesa=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_mesa.php?id_mesa=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>