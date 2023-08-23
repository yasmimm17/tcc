<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_mesa = (int) $_GET["id_mesa"];

     $sql = "delete from tipo_mesa where id_mesa = $id_mesa;";

     $result = mysqli_query($con, $sql);
     
     if($result){
          echo "Tipo de mesa excluído com sucesso.<br><hr>";
          include "lista_mesa.php";
     }else{
          echo "ERRO";
     }
?>