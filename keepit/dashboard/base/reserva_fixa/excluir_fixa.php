<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_reserva = (int) $_GET["id_reserva"];

     $sql = "delete from reserva_fixa where id_reserva = $id_reserva;";

     $result = mysqli_query($con, $sql);
     
     if($result){
          echo "Reserva excluída com sucesso.<br><hr>";
          include "lista_fixa.php";
     }else{
          echo "ERRO";
     }
?>