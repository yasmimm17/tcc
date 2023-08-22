<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "select * from restaurante;";

     $result = mysqli_query($con, $sql);

     echo "<table border='1'>
     <th>ID</th> <th>NOME</th> <th>NÚMERO</th> <th>COPLEMENTO</th> <th>SEDE</th> <th>USUARIO</th> <th>SENHA</th> <th>NÍVEL</th> <th>CEP</th> <th>ID DA MARCA</th> <th>ATIVO</th> <th colspan='2'>AÇÕES</th>";
     while($info = mysqli_fetch_array($result)){
          echo "<tr>
          <td>".$info['id_res']."</td>
          <td>".$info['nome_res']."</td>
          <td>".$info['nr_res']."</td>
          <td>".$info['comp_res']."</td>
          <td>".$info['tipo_sede_res']."</td>
          <td>".$info['usuario']."</td>
          <td>".$info['senha']."</td>
          <td>".$info['nivel']."</td>
          <td>".$info['cep']."</td>
          <td>".$info['id_marca']."</td>
          <td>".$info['ativo']."</td>
          <td><a href = 'fedit_res.php?id_res=". $info[0]."'>Editar</a></td>
          <td><a href = 'excluir_res.php?id_res=". $info[0]."'>Excluir</a></td></tr>
          ";
     }
?>