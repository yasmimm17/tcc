<?php
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_res = $_POST["id_res"];
     $nome_res = $_POST["nome_res"];
     $nr_res = $_POST["nr_res"];
     $comp_res = $_POST["comp_res"];
     $tipo_sede_res = $_POST["tipo_sede_res"];
     $usuario = $_POST["usuario"];
     $senha = $_POST["senha"];
     $nivel = $_POST["nivel"];
     $cep = $_POST["cep"];
     $id_marca = $_POST["id_marca"];

     $sql = "update restaurante set nome_res='$nome_res', nr_res='$nr_res', comp_res='$comp_res', tipo_sede_res='$tipo_sede_res', usuario='$usuario', senha='$senha', nivel='$nivel', cep='$cep', id_marca='$id_marca' where id_res = $id_res;";

     $result = mysqli_query($con, $sql);

     if($result){
          echo "Restaurante atualizado com sucesso.<br><hr>";
          include "lista_res.php";
     }else{
          echo "ERRO";
     }
?>