<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_res = (int) $_GET["id_res"];

     $sql = "delete from restaurante where id_res = $id_res;";

     $result = mysqli_query($con, $sql);
     
     if($result){
          echo "Restaurante excluído com sucesso.<br><hr>";
          include "lista_res.php";
     }else{
          echo "ERRO";
     }
?>