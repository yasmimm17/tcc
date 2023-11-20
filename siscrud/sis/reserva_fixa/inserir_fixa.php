<?php
     $horario = $_POST["horario"];
     $qtde_pessoas = $_POST["qtde_pessoas"];
     $obs = $_POST["obs"];
     $cel_contato = $_POST["cel_contato"];
     $id_res = $_POST["id_res"];
     $id_cli = $_POST["id_cli"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into reserva_fixa values ";
     $sql .= "('0','$horario', '$qtde_pessoas', '$obs', '$cel_contato', '$id_res', '$id_cli');";

     echo $sql; 

     $result = mysqli_query($con, $sql);

     if($result){
         header("Location: \GitHub/tcc/siscrud/base/reserva-sim.php");
     }else{
          echo "ERRO";
     }
?>