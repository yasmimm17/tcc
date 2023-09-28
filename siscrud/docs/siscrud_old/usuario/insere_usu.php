<?php
     $nome = $_POST["nome"];
     $email = $_POST["email"];
     $senha = $_POST["senha"];
     $cep = $_POST["cep"];
     $nivel = $_POST["nivel"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into cliente values ";
     $sql .= "(0, '$nome', '$email', sha1('$senha'), '$cep', '$nivel', 1)"; 

     //echo $sql; exit;

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Usuário incluído com sucesso.<br><hr>";
          include "lista_usu.php";
     }else{
          echo "ERRO";
     }
?>