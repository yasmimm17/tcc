<?php
     $nome_estilo_mesa = $_POST["nome_estilo_mesa"];
     $lugares_mesa = $_POST["lugares_mesa"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into tipo_mesa values ";
     $sql .= "(0, '$nome_estilo_mesa', '$lugares_mesa')"; 

     //echo $sql; exit;

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Tipo de mesa incluído com sucesso.<br><hr>";
          include "lista_mesa.php";
     }else{
          echo "ERRO";
     }
?>