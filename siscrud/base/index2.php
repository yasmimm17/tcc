<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keep It</title>

  <!-- css -->
  <link rel="stylesheet" href="../css/style3.css">
  <!--bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
        <!-- Container wrapper -->
        <div class="container-fluid">
    
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img
                src="../img/Keep It.png"
                height="20"
                loading="lazy"
            />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#text-content2">Restaurante</a>
            </li>
            </ul>
            <!-- Left links -->
        </div>
    
        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Buttons -->
            <button type="button" id="criar"><a style="color: #005A09;" href="../sis/usuario/cadastro_usu.php">Criar conta</a></button>
            <button type="button" id="logar"><a style="color: white;" href="login.php">Entrar</a></button>
        <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
 
    <div class="container-main">
        <div class="row text-content">
            <div class="col-md-6 apresentacao">
                <h1>Keep It</h1>
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lorem commodo, fringilla magna sed, bibendum dolor. Ut feugiat ipsum eu metus semper.</h3>
                <button>Vamos lá!</button>
            </div>

            <div class="col-md-6">
                <img src="../img/home.png">
            </div>
        </div>

        <div class="text-content2" id="text-content2">
            <div class="col-md-6">
                <img src="../img/seta.png">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lorem commodo, fringilla magna sed, bibendum dolor. Ut feugiat ipsum eu metus semper.</h4>
            </div>

            <div class="col-md-6">
                <h1 style="font-size:55px">É dono de um négocio? Cadastre seu restaurante!</h1>
                <div style="display: flex; align-items: center;"><button style="font-size:25px">Cadastre-se!</button></div>
            </div>
        </div>
    </div>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>