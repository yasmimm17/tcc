<?php
     $horario = $_POST["horario"];
     $qtde_pessoas = $_POST["qtde_pessoas"];
     $obs = $_POST["obs"];
     $cel_contato = $_POST["cel_contato"];
     $situacao_reserva = $_POST["situacao_reserva"];
     $id_res = $_POST["id_res"];
     $id_cli = $_POST["id_cli"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into reserva_fixa values ";
     $sql .= "(0, '$horario', '$qtde_pessoas', '$obs', '$cel_contato', '$situacao_reserva', '$id_res', '$id_cli')"; 

     //echo $sql; exit;

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Reserva incluída com sucesso.<br><hr>";
          include "lista_fixa.php";
     }else{
          echo "ERRO";
     }
?>