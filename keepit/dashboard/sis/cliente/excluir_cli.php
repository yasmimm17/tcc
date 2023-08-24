<?php
     $id_cli = (int) $_GET["id_cli"];

     $sql = "delete from cliente where id_cli = $id_cli;";

     $result = mysqli_query($con, $sql)or die(mysqli_error());
     
     if ($resultado) {
          header('Location: \keepit/dashboard/index.php?page=lista_alu&msg=3');
          mysqli_close($con);
      }else{
          header('Location: \keepit/dashboard/index.php?page=lista_alu&msg=4');
          mysqli_close($con);
      }
?>