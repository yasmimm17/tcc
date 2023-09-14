<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_invent = (int) $_GET["id_invent"];

     $sql = "delete from inventario where id_invent = $id_invent;";

     $result = mysqli_query($con, $sql);
     
     if($result){
          echo "Inventário excluído com sucesso.<br><hr>";
          include "lista_invent.php";
     }else{
          echo "ERRO";
     }
?>