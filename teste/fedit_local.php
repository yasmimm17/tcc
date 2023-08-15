<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keepit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_GET['edit'])) {
    $cepToEdit = $_GET['edit'];
    
    $sql = "SELECT cep, logradouro, bairro, cidade, uf FROM localidade WHERE cep = '$cepToEdit'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $cep = $row["cep"];
        $logradouro = $row["logradouro"];
        $bairro = $row["bairro"];
        $cidade = $row["cidade"];
        $uf = $row["uf"];
    }
}

if (isset($_POST['update'])) {
    $newLogradouro = $_POST['new_logradouro'];
    $newBairro = $_POST['new_bairro'];
    $newCidade = $_POST['new_cidade'];
    $newUf = $_POST['new_uf'];
    
    $sql = "UPDATE localidade 
            SET logradouro = '$newLogradouro', bairro = '$newBairro', cidade = '$newCidade', uf = '$newUf' 
            WHERE cep = '$cepToEdit'";
            
    if ($conn->query($sql) === TRUE) {
        echo "Dados atualizados com sucesso!";
        // Redirecionar para a página de listagem de dados ou para onde desejar
    } else {
        echo "Erro ao atualizar dados: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Dados</title>
</head>
<body>
    <?php if (isset($cepToEdit)) { ?>
    <form method="post">
        Logradouro: <input type="text" name="new_logradouro" value="<?php echo $logradouro; ?>"><br>
        Bairro: <input type="text" name="new_bairro" value="<?php echo $bairro; ?>"><br>
        Cidade: <input type="text" name="new_cidade" value="<?php echo $cidade; ?>"><br>
        UF: <input type="text" name="new_uf" value="<?php echo $uf; ?>"><br>
        <input type="submit" name="update" value="Atualizar">
    </form>
    <?php } else {
        echo "Nenhum dado para editar.";
    } ?>
</body>
</html>
