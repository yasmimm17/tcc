<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $idreserva_ondemand = $_POST["idreserva_ondemand"];
     $qtde_pessoas = $_POST["qtde_pessoas"];
     $cel_contato = $_POST["cel_contato"];
     $situacao_reserva = $_POST["situacao_reserva"];
     $id_res = $_POST["id_res"];
     $id_cli = $_POST["id_cli"];

     $sql = "update reserva_fixa set qtde_pessoas='$qtde_pessoas', cel_contato='$cel_contato', situacao_reserva='$situacao_reserva', id_res='$id_res', id_cli='$id_cli' where idreserva_ondemand = $idreserva_ondemand;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Reserva atualizada com sucesso.<br><hr>";
          include "lista_demand.php";
     }else{
          echo "ERRO";
     }
?>