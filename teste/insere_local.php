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
$logradouro = "Rua Exemplo";
$bairro = "Bairro Teste";
$cidade = "Cidade A";
$uf = "AB";

$sql = "INSERT INTO localidade (cep, logradouro, bairro, cidade, uf)
        VALUES ('$cep', '$logradouro', '$bairro', '$cidade', '$uf')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
    include "lista_local.php";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$conn->close();
?>
