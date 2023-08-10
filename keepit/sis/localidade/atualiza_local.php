<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $cep = $_POST["cep"];
     $logradouro = $_POST["logradouro"];
     $bairro = $_POST["bairro"];
     $cidade = $_POST["cidade"];
     $uf = $_POST["uf"];

     $sql = "update localidade set logradouro='$logradouro', bairro='$bairro', cidade='$cidade', uf='$uf' where cep = $cep;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Localidade atualizada com sucesso.<br><hr>";
          include "lista_local.php";
     }else{
          echo "ERRO";
     }
?>