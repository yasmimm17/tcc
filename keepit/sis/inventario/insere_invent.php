<?php
     $qtde = $_POST["qtde"];
     $id_mesa = $_POST["id_mesa"];
     $id_res = $_POST["id_res"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into inventario values ";
     $sql .= "(0, '$qtde', '$id_mesa', '$id_res')"; 

     //echo $sql; exit;

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Inventário incluído com sucesso.<br><hr>";
          include "lista_invent.php";
     }else{
          echo "ERRO";
     }
?>