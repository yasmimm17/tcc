<?php
include "../../base/config.php";
if(!isset($_SESSION)) session_start();
//Verfica se o id do usuário está definido na sessão
if(isset($_SESSION["UsuarioID"])) {
    $usuario_id = $_SESSION["UsuarioID"];
} else{
    //Redireciona o usuário para o login se não estiver logado
    header("location: ../../base/login.php");
    exit;
}

//Consulta no banco de dados para obter os dados do usuário
$sql = "select * from reserva_fixa where id_cli = '$usuario_id'";

//Executar consulta
$result = mysqli_query($con, $sql);

if($result){
  //Recuperar os dados e apresentá-los
  $row = mysqli_fetch_assoc($result);

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Suas Reservas</title>
    <link rel="stylesheet" href="../../css/style3.css">

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
        margin-top: -1em
    }

    input{
        position: absolute;
        background: #ededed;
        border: none;
        outline: 0;
        padding: 10px;
        border-radius: 40px;
        left: 75%;
    }

    /* Estilos CSS para a tabela */
    table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #D7FFDB;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <header class="header-home row">

        <div class="row">
            <div class="col-md-8">
                    <a href="../../base/inicio.php"><img src="../../img/Keep It.png"></a>
            </div>

            <nav class="nav-home col-md-4">
                <input type="search" class="search-text" placeholder="Pesquisar">
                <a class href="lista_reserva.php" style="position: absolute; left: 90%;"><img src="../../img/reserva.png" id="header-img"></a>
                <a href="../../base/dados.php" style="position: absolute; left: 95%;"><img src="../../img/perfil.png" id="header-img"></a>
            </nav>
        </div>
    </header>
    
    <h1 style="margin-left: 0.5em">Suas Reservas</h1>
    <table border="1">
        <tr>
            <th>ID da Reserva</th>
            <th>Data e horário</th>
            <th>Quantidade de pessoas</th>
            <th>Obs</th>
            <th>Contato</th>
            <th>ID do restaurante</th>
            <th>ID do Cliente</th>
            <th>Ações</th>
            <!-- Adicione outras colunas conforme necessário -->
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Exibe as reservas do cliente
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_reserva"] . "</td>";
                echo "<td>" . $row["horario"] . "</td>";
                echo "<td>" . $row["qtde_pessoas"] . "</td>";
                echo "<td>" . $row["obs"] . "</td>";
                echo "<td>" . $row["cel_contato"] . "</td>";
                echo "<td>" . $row["id_res"] . "</td>";
                echo "<td>" . $row["id_cli"] . "</td>";
                echo "<td><a href = 'fedit_reserva.php?id_reserva='>Editar </a><a href = 'excluir_reserva.php?id_reserva='> Excluir</a></td>";
                // Adicione outras colunas conforme necessário
                echo "</tr>";
            }
        } else {
            echo header('Location: \GitHub/tcc/siscrud/base/reserva-nao.php');
        }
        ?>
    </table>
    <br>
</body>
</html>

<?php
$con->close();
?>
