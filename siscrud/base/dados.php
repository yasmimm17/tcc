<?php
    include "config.php";
  
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
    <header class="header-home row">

      <div class="col-md-6">
          <img src="../img/Keep It.png">
      </div>

      <nav class="nav-home col-md-6">
          <input type="search" placeholder="Pesquisar">
          <img src="../img/search.png" id="header-img">
          <a href="reserva-nao.php"><img src="../img/reserva.png" id="header-img"></a>
          <a href="dados.php"><img src="../img/perfil.png" id="header-img"></a>
      </nav>
    </header>

    <div class="conteudo">
      <main class="dados">
          <div class="row">
            <div class="col-md-2">
              <img id="user" src="../img/home-perfil.png">
            </div>
            <div class="col-md-4">
              <h3 style="font-weight: bold;">Olá, <?php echo'' .$nome. '';?>!<img src="../img/editar.png"></h3>
            </div>
          </div>
          <div class="info">
              <div class="row">
                  <div class="col-3">
                    <div class="inputgroup">
                      <input type="text" maxlength="60" name="nome" id="nome" <?php echo'value="' .$nome. '"';?>>
                      <img src="../img/perfil-verde.png">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="inputgroup">
                      <input type="text" maxlength="60" name="senha" id="senha" <?php echo'value="' .$senha. '"';?>>
                      <img src="../img/senha-verde.png">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <div class="inputgroup">
                    <input type="text" maxlength="60" name="email" id="email" <?php echo'value="' .$email. '"';?>>
                    <img src="../img/email-verde.png">
                  </div>
                </div>
                <div class="col-3">
                  <div class="inputgroup">
                    <input type="text" name="nivel" id="nivel" <?php echo'value="' .$nivel. '"';?>>
                    <img src="../img/nivel-verde.png">
                  </div>
                </div>
              </div>
              <div class="row" style="width: 20em; text-align: center;">
                <div class="col-md-3"><a href="logout.php"><button>Sair</button></a></div>
              </div>
          </div>
      </main>
    </div>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<?php
  } else{
        echo "Erro na consulta:" .mysqli_error($con);
      }
?>