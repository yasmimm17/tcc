<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");
     $cep = (int) $_GET["cep"];
     $sql = "delete from localidade where cep = $cep;";
     $result = mysqli_query($con, $sql);
     if($result){
          echo "Localidade excluída com sucesso.<br><hr>";
          include "lista_local.php";
     }else{
          echo "ERRO";
     }
?>