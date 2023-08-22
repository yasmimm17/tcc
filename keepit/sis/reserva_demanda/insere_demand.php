<?php
     $qtde_pessoas = $_POST["qtde_pessoas"];
     $cel_contato = $_POST["cel_contato"];
     $situacao_reserva = $_POST["situacao_reserva"];
     $id_res = $_POST["id_res"];
     $id_cli = $_POST["id_cli"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into reserva_ondemand values ";
     $sql .= "(0, '$qtde_pessoas', '$cel_contato', '$situacao_reserva', '$id_res', '$id_cli')"; 

     //echo $sql; exit;

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Reserva incluída com sucesso.<br><hr>";
          include "lista_demand.php";
     }else{
          echo "ERRO";
     }
?>