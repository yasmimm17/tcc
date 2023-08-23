<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_cli = $_POST["id_cli"];
     $nome = $_POST["nome"];
     $email = $_POST["email"];
     $senha = $_POST["senha"];
     $cep = $_POST["cep"];

     $sql = "update cliente set nome='$nome', email='$email', senha='$senha', cep='$cep' where id_cli = $id_cli;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Cliente atualizado com sucesso.<br><hr>";
          include "lista_cli.php";
     }else{
          echo "ERRO";
     }
?>