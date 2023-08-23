<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_marca = $_POST["id_marca"];
     $nome_marca = $_POST["nome_marca"];
     $logo_marca = $_POST["logo_marca"];

     $sql = "update marca_rede set nome_marca='$nome_marca', logo_marca='$logo_marca' where id_marca = $id_marca;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Marca atualizada com sucesso.<br><hr>";
          include "lista_marca.php";
     }else{
          echo "ERRO";
     }
?>