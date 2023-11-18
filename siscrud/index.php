<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>.: SisCRUD :.</title>
  </head>
  <body>
    
    <?php
      if(!isset($_SESSION)) session_start();
      include "base/config.php";
      switch($_SESSION['UsuarioNivel']){
        case 1: include "base/sidebar1.php"; break;
        case 2: include "base/sidebar2.php"; break;
        case 3: include "base/sidebar3.php"; break; exit;
      }
    ?>

  <section class="home-section">
      <nav class="navbar navbar-expand-sm" style="background-color: rgba(255, 255, 255, 0.2);">
      <?php
          //Verfica se o id do usuário está definido na sessão
          if(isset($_SESSION["UsuarioID"])) {
              $usuario_id = $_SESSION["UsuarioID"];
          } else{
              //Redireciona o usuário para o login se não estiver logado
              header("location: base/login.php");
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

        <ul class="navbar-nav" style="margin-left: 80%;">
          <li class="nav-item" style="font-weight: bold; margin-top: 5%">
            <?php echo'' .$nome. '';?>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="base/dados.php"><img src="img/home-perfil.png" width="40" height="40"></a>
          </li>
        </ul>
      </nav>
      <br>
      <?php
        } else{
              echo "Erro na consulta:" .mysqli_error($con);
            }
      ?>
    <!-- cards -->
    <?php 
      include "base/ch_pages.php"; 
    ?>
    </section>

    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>
</html>

