<?php
     $nome = $_POST["nome"];
     $email = $_POST["email"];
     $senha = $_POST["senha"];
     $nivel = $_POST["nivel"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into usuario values ";
     $sql .= "('0','$nome', '$email', '".sha1($senha)."', '$nivel', '1', '');";

     //echo $sql; exit;

     $result = mysqli_query($con, $sql);

     if($result){
          if($nivel == 1){
               header('Location: \GitHub/tcc/siscrud/base/login.php');
               mysqli_close($con);
          }else{
               header("Location: index.php?page=home");
          }
     }else{
          echo "ERRO";
     }
?>