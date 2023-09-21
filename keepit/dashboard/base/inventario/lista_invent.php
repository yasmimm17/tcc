<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "select * from inventario;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>QUANTIDADE</th> <th>ID DA MESA</th> <th>ID DO RESTAURANTE</th> <th colspan='2'>AÇÕES</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id_invent']."</td>
          <td>".$info['qtde']."</td>
          <td>".$info['id_mesa']."</td>
          <td>".$info['id_res']."</td>
          <td><a href = 'fedit_invent.php?id_invent=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_invent.php?id_invent=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>