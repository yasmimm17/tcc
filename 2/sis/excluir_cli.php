<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");
     $id_cli = (int) $_GET["id_cli"];
     $sql = "delete from cliente where id_cli = $id_cli;";
     $result = mysqli_query($con, $sql);
     if($result){
          echo "Cliente excluído com sucesso.<br><hr>";
          include "lista_cli.php";
     }else{
          echo "ERRO";
     }
?>