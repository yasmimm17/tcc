<style>
  main.dados button{
    margin-top: 2em;
    border-radius: 3em;
    border: none;
    padding: 0.5em;
    color: white;
    background-color: rgb(153, 24, 24);
    font-weight: bold;
    width: 10em;
    align-items: center;
  }

  main.dados button:hover{
    margin-top: 2em;
    border-radius: 3em;
    border: none;
    padding: 0.5em;
    color: white;
    background-color: #831515;
    font-weight: bold;
    width: 10em;
    align-items: center;
  }

  main.dados label{
    background: #E0E0E0;
    padding: 0.5em;
    border-radius: 3em;
    margin-bottom: 1em;
    width: 15em
  }

  main.dados label img{
    width: 20px;
    height: auto;
  }

  main.dados{
    width: 50em;
    height: 25em;
    box-shadow: 10px 5px 5px #393939;
    border-radius: 2em
  }
</style>

<?php
    include "config.php";
    if(!isset($_SESSION)) session_start();
    //Verfica se o id do usuário está definido na sessão
    if(isset($_SESSION["UsuarioID"])) {
        $usuario_id = $_SESSION["UsuarioID"];
    } else{
        //Redireciona o usuário para o login se não estiver logado
        header("location: login.php");
        exit;
    }

    //Consulta no banco de dados para obter os dados do usuário
    $sql = "select * from usuario where id_cli = '$usuario_id'";

    //Executar consulta
    $result = mysqli_query($con, $sql);

    if($result){
      //Recuperar os dados e apresentá-los
      $row = mysqli_fetch_assoc($result);

      //Exemplo de como apresentar os valores nos inputs
      $nome = $row['nome'];
      $email = $row['email'];
      $senha = $row['senha'];
      $nivel = $row['nivel'];
      $ativo = $row['ativo'];

      //Exibir
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keep It</title>

    <!-- css -->
    <link rel="stylesheet" href="../css/style3.css">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
      include "header.php";
    ?>

      <main class="dados col-md-6" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%)">
          <div class="row">
            <div class="col-md-4">
              <img id="user" src="../img/home-perfil.png">
            </div>
            <div class="col-md-8">
              <h3 style="font-weight: bold;">Olá, <?php echo'' .$nome. '';?>!<a href="../sis/usuario/editar_usu.php"><img src="../img/editar.png"></a></h3>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-4">
                <label for="email" name="email" id="email"><img src="../img/email-verde.png"><?php echo"$email";?></label>
            </div>
            <div class="col-md-4">
                <label for="nivel" name="nivel" id="nivel"><img src="../img/nivel-verde.png"><?php
                    if($nivel == 1){
                      echo "Cliente";
                    }elseif( $nivel == 2){
                      echo "Adm de restaurante";
                    }else{
                      echo "Adm Geral";
                    }
                    ?>
                </label>
            </div>
            <div class="col-md-4" style="display: flex; justify-content: center;">
                <label for="ativo" name="ativo" id="ativo"><img src="../img/check-verde.png"><?php 
                    if($ativo == 1){
                      echo "Ativo: SIM";
                    }else{
                      echo "Ativo: NÃo";
                    }
                    ?>
                </label>
            </div>
          </div>
          <div class="row">  
              <a href="../../siscrud/base/logout.php"><button style="position: absolute; left: 50%; transform: translate(-50%, -50%)">Sair</button></a>
          </div>
      </main>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<?php
  } else{
        echo "Erro na consulta:" .mysqli_error($con);
      }
?>