<?php
     $nome_marca = $_POST["nome_marca"];
     $logo_marca = $_POST["logo_marca"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into marca_rede values ";
     $sql .= "(0, '$nome_marca', '$logo_marca')"; 

     //echo $sql; exit;

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Marca incluída com sucesso.<br><hr>";
          include "lista_marca.php";
     }else{
          echo "ERRO";
     }
?>