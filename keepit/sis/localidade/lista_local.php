<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "select * from localidade;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>CEP</th> <th>LOGRADOURO</th> <th>BAIRRO</th> <th>CIDADE</th> <th>UF</th> <th>ATIVO</th> <th colspan='2'>AÇÕES</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['cep']."</td>
          <td>".$info['logradouro']."</td>
          <td>".$info['bairro']."</td>
          <td>".$info['cidade']."</td>
          <td>".$info['uf']."</td>
          <td>".$info['ativo']."</td>
          <td><a href = 'fedit_local.php?id=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_local.php?id=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>