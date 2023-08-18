<?php
     $cep = $_POST["cep"];
     $logradouro = $_POST["logradouro"];
     $bairro = $_POST["bairro"];
     $cidade = $_POST["cidade"];
     $uf = $_POST["uf"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into localidade values ";
     $sql .= "('$cep', '$logradouro', '$bairro', '$cidade', '$uf')"; 

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Localidade incluída com sucesso.<br><hr>";
          include "lista_local.php";
     }else{
          echo "ERRO";
     }
?>