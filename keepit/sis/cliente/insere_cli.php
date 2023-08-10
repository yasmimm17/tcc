<?php
     $nome = $_POST["nome"];
     $email = $_POST["email"];
     $senha = $_POST["senha"];
     $cep = $_POST["cep"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into cliente values ";
     $sql .= "(0, '$nome', '$email', sha1('$senha'), '$cep')"; 

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Cliente incluído com sucesso.<br><hr>";
          include "lista_cli.php";
     }else{
          echo "ERRO";
     }
?>