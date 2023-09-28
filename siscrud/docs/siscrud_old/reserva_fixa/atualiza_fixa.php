<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_reserva = $_POST["id_reserva"];
     $horario = $_POST["horario"];
     $qtde_pessoas = $_POST["qtde_pessoas"];
     $obs = $_POST["obs"];
     $cel_contato = $_POST["cel_contato"];
     $situacao_reserva = $_POST["situacao_reserva"];
     $id_res = $_POST["id_res"];
     $id_cli = $_POST["id_cli"];

     $sql = "update reserva_fixa set horario='$horario', qtde_pessoas='$qtde_pessoas', obs='$obs', cel_contato='$cel_contato', situacao_reserva='$situacao_reserva', id_res='$id_res', id_cli='$id_cli' where id_reserva = $id_reserva;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Reserva atualizada com sucesso.<br><hr>";
          include "lista_fixa.php";
     }else{
          echo "ERRO";
     }
?>