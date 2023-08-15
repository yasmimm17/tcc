<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keepit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$cep = "12345-678";

$sql = "DELETE FROM localidade WHERE cep = '$cep'";

if ($conn->query($sql) === TRUE) {
    echo "Dados excluídos com sucesso!";
} else {
    echo "Erro ao excluir dados: " . $conn->error;
}

$conn->close();
?>
