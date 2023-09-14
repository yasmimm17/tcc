<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_mesa = $_POST["id_mesa"];
     $lugares_mesa = $_POST["lugares_mesa"];

     $sql = "update tipo_mesa set lugares_mesa='$lugares_mesa' where id_mesa = $id_mesa;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Tipo de mesa atualizado com sucesso.<br><hr>";
          include "lista_mesa.php";
     }else{
          echo "ERRO";
     }
?>