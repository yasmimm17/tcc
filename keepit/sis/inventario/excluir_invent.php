<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_mesa = (int) $_GET["id_mesa"];

     $sql = "delete from inventario where id_mesa = $id_mesa;";

     $result = mysqli_query($con, $sql);
     
     if($result){
          echo "Inventário excluído com sucesso.<br><hr>";
          include "lista_invent.php";
     }else{
          echo "ERRO";
     }
?>