<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $idreserva_ondemand = (int) $_GET["idreserva_ondemand"];

     $sql = "delete from reserva_ondemand where idreserva_ondemand = $idreserva_ondemand;";

     $result = mysqli_query($con, $sql);
     
     if($result){
          echo "Reserva excluída com sucesso.<br><hr>";
          include "lista_demand.php";
     }else{
          echo "ERRO";
     }
?>