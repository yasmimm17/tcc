<?php
include('conexao.php'); // Conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_marca = $_POST['nome_marca'];

    // Verifica se um arquivo de imagem foi enviado
    if(isset($_FILES['logo_marca']) && $_FILES['logo_marca']['error'] === UPLOAD_ERR_OK) {
        $logo_marca = file_get_contents($_FILES['logo_marca']['tmp_name']);

        // Prepara e executa a consulta SQL para inserir a imagem no banco de dados
        $stmt = $conn->prepare("INSERT INTO marca_rede (nome_marca, logo_marca) VALUES (?, ?)");
        $stmt->bind_param("sb", $nome_marca, $logo_marca);
        
        if($stmt->execute()) {
            header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=1');
        } else {
            header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=1') . $conn->error;
        }
        $stmt->close();
    } else {
        echo "Nenhuma imagem enviada ou ocorreu um erro no upload.";
    }
}

$conn->close();
?>
