<?php
     if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
     $con = mysqli_connect("localhost", "root", "", "keepit");

     $id_res = $_POST["id_res"];
     $nome_res = $_POST["nome_res"];
     $nr_res = $_POST["nr_res"];
     $comp_res = $_POST["comp_res"];
     $tipo_sede_res = $_POST["tipo_sede_res"];
     $cep = $_POST["cep"];
     $id_marca = $_POST["id_marca"];

     $sql = "update restaurante set nome_res='$nome_res', nr_res='$nr_res', comp_res='$comp_res', tipo_sede_res='$tipo_sede_res', cep='$cep', id_marca='$id_marca' where id_res = $id_res;";

     $result = mysqli_query($con, $sql);

     if($resultado){
          header('Location: \GitHub/tcc/siscrud/index.php?page=lista_res&msg=2');
         mysqli_close($con);
     }else{
          header('Location: \GitHub/tcc/siscrud/index.php?page=lista_res&msg=5');
         mysqli_close($con);
     }
     
?>