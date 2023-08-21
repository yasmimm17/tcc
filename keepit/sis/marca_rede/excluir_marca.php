<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_marca = (int) $_GET["id_marca"];

     $sql = "delete from marca_rede where id_marca = $id_marca;";

     $result = mysqli_query($con, $sql);
     
     if($result){
          echo "Marca excluída com sucesso.<br><hr>";
          include "lista_marca.php";
     }else{
          echo "ERRO";
     }
?>