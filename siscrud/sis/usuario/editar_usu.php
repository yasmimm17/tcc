<style>
    header{
    background-color: rgb(255, 255, 255);
    height: auto;
    padding-top: 30px;
    padding-bottom: 100px;
    padding-right: 30px;
    padding-left: 30px;
    }

    header nav{
        width: 100%;
        display: flex;
        justify-content: space-between; 
        align-items: center;
    }

    header input{
        position: absolute;
        background: #ededed;
        border: none;
        outline: 0;
        padding: 10px;
        border-radius: 40px;
        left: 70%;
    }

  main.dados button{
    margin-top: 2em;
    border-radius: 3em;
    border: none;
    background: #197222;
    padding: 0.5em;
    color: white;
    font-weight: bold;
    width: 10em;
    align-items: center;
  }

  main.dados button:hover{
    transition: 0.2s;
    margin-top: 2em;
    border-radius: 3em;
    border: none;
    padding: 0.5em;
    color: white;
    background-color: #005A09;
    font-weight: bold;
    width: 10em;
    align-items: center;
  }

  main.dados button.cancel{
    margin-top: 2em;
    border-radius: 3em;
    border: 1.5px solid #197222;
    background: transparent;
    padding: 0.5em;
    color: #197222;
    font-weight: bold;
    width: 10em;
    align-items: center;
  }

  main.dados button.cancel:hover{
    transition: 0.2s;
    margin-top: 2em;
    border-radius: 3em;
    border: 1.5px solid #197222;
    background: #F3F3F3;
    padding: 0.5em;
    color: #197222;
    font-weight: bold;
    width: 10em;
    align-items: center;
  }


  main.dados input,  main.dados select{
    outline: 0;
    border: none;
    background: #E0E0E0;
    padding: 0.5em;
    border-radius: 3em;
    margin-bottom: 1em;
    width: 15em
  }

  main.dados input img{
    width: 20px;
    height: auto;
  }

  main.dados{
    width: 50em;
    height: 25em;
    box-shadow: 5px 5px 5px #393939;
    border-radius: 2em
  }

  main.dados h3{
    font-weight: bold;
    color: #005A09;
  }
</style>

<?php
    include "../../base/config.php";
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
    <link rel="stylesheet" href="../../css/style3.css">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header class="header-home row">

    <div class="row">
        <div class="col-md-8">
        <a href="../../base/inicio.php"><img src="../../img/Keep It.png"></a>
        </div>

        <nav class="nav-home col-md-4">
            <input type="search" class="search-text" placeholder="Pesquisar">
            <a class href="../../sis/reserva_fixa/lista_reserva.php" style="position: absolute; left: 90%;"><img src="../../img/reserva.png" id="header-img"></a>
            <a href="dados.php" style="position: absolute; left: 95%;"><img src="../../img/perfil.png" id="header-img"></a>
        </nav>
    </div>
    </header>

        <main class="dados col-md-6" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%)">
            <div class="row">
                <div class="col-md-4">
                <img id="user" src="../../img/home-perfil.png">
                </div>
                <div class="col-md-8">
                    <h3>Edição de dados</h3>
                </div>
            </div>
            <br>

            <form action="updt_usu.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <input type="email" name="email" id="email" value='<?php echo $row["email"]; ?>'>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" id="nivel" name="nivel">
                            <option value="1"<?php if (!(strcmp(1, htmlentities($row['nivel'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Cliente</option>
                            <option value="2"<?php if (!(strcmp(2, htmlentities($row['nivel'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>Quero cadastrar meu restaurante</option>
                        </select>
                    </div>
                    <div class="col-md-4" >
                        <input type="text" name="nome" id="nome" value='<?php echo $row["nome"]; ?>'>
                    </div>
                </div>
            
                <div class="row">  
                        <div class="col-md-6">
                            <button type="submit" style="position: absolute; left: 30%;" style="background-color: #005A09;">Salvar</button>
                        </div>
                        <div class="col-md-6">
                            <a href="../../siscrud/base/dados.php"><button style="position: absolute;" class="cancel">Cancelar</button></a>
                        </div>
                </div>
            </form>
        </main>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<?php
    }else{
        echo "Erro na consulta:" .mysqli_error($con);
    }
?>

