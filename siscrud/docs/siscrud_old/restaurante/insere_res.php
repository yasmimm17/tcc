<?php
     $nome_res = $_POST["nome_res"];
     $nr_res = $_POST["nr_res"];
     $comp_res = $_POST["comp_res"];
     $tipo_sede_res = $_POST["tipo_sede_res"];
     $cep = $_POST["cep"];
     $id_marca = $_POST["id_marca"];

     $con = mysqli_connect("localhost", "root", "", "keepit");

     $sql = "insert into restaurante values ";
     $sql .= "(0, '$nome_res', '$nr_res', '$comp_res', '$tipo_sede_res', '$cep', '$id_marca', 1)"; 

     //echo $sql; exit;

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Restaurante incluído com sucesso.<br><hr>";
          include "lista_res.php";
     }else{
          echo "ERRO";
     }
?>