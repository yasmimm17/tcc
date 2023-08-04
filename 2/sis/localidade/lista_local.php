<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "select * from cliente;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>NOME</th> <th>EMAIL</th> <th>SENHA</th> <th>CEP</th> <th>ATIVO</th> <th colspan='2'>AÇÕES</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id_cli']."</td>
          <td>".$info['nome']."</td>
          <td>".$info['email']."</td>
          <td>".$info['senha']."</td>
          <td>".$info['cep']."</td>
          <td>".$info['ativo']."</td>
          <td><a href = 'fedit_cli.php?id=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_cli.php?id=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>