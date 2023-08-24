<?php
     <?php
     $id_cli              =$_POST["id_cli"];
     $nome          = $_POST["nome"];
     $email          = $_POST["email"];
     $senha           = $_POST["senha"];
     $cep           = $_POST["cep"];
     $nivel           	  = $_POST["nivel"];
     
     $sql = "update cliente set ";
     $sql .= "nome='".$nome."', email='".$email."', senha='".$senha."',";
     $sql .= "cep='".$cep."', nivel='".$nivel."'";
     $sql .= "where id_cli = '".$id_cli."';";
     
     $resultado = mysqli_query($con, $sql) or die(mysqli_error());
     if($resultado){
         header('Location: \keepit/dashboard/index.php?page=lista_alu&msg=2');
         mysqli_close($con);
     }else{
         header('Location: \keepit/dashboard/index.php?page=lista_alu&msg=4');
         mysqli_close($con);
     }
     ?>