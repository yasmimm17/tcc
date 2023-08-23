<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "select * from marca_rede;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>NOME</th> <th>LOGO</th> <th>ATIVO</th> <th colspan='2'>AÇÕES</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id_marca']."</td>
          <td>".$info['nome_marca']."</td>
          <td>".$info['logo_marca']."</td>
          <td>".$info['ativo']."</td>
          <td><a href = 'fedit_marca.php?id_marca=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_marca.php?id_marca=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>