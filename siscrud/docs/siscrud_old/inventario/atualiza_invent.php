<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_invent = $_POST["id_invent"];
     $qtde = $_POST["qtde"];
     $id_mesa = $_POST["id_mesa"];
     $id_res = $_POST["id_res"];

     $sql = "update inventario set qtde='$qtde', id_mesa='$id_mesa', id_res='$id_res' where id_invent = $id_invent;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Inventário atualizado com sucesso.<br><hr>";
          include "lista_invent.php";
     }else{
          echo "ERRO";
     }
?>