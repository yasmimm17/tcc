<?php
    if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");

    $nome_marca        = $_POST["nome_marca"];
    $logo_marca       = !empty($_FILES['logo_marca']['name']) ? $_FILES['logo_marca']['name'] : "";

    if(!empty($logo_marca)){
        $caminho = "imagens/uploads/";
        $logo_marca = uploadImage($caminho);
    }

    $sql = "insert into marca_rede values ";
    $sql .= "('0','$nome_marca','$logo_marca');";

    $resultado = mysqli_query($con, $sql)or die(mysqli_error());

    if($resultado){
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=1');
        mysqli_close($con);
    }else{
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=4');
        mysqli_close($con);
    }

    function uploadImage($caminho){
        if(!empty($_FILES['logo_marca']['name'])) {
            $nomeArquivo = $_FILES['logo_marca']['name'];
            $tipo = $_FILES['logo_marca']['type'];
            $nomeTemporario = $_FILES['logo_marca']['tmp_name'];
            $tamanho = $_FILES['logo_marca']['size'];
            $erros = array();

            $tamanhoMaximo = 1024 * 1024 * 5; //5MB
            if($tamanho > $tamanhoMaximo){
                $erros[] = "Seu arquivo excede o tamanho máximo<br>";
            }

            $arquivosPermitidos = ["png", "jpg", "jpeg"];
            $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
            if(!in_array($extensao, $arquivosPermitidos)){
                $erros[] = "Arquivo não permitido<br>";
            }

            $typesPermitidos = ["image/png", "image/jpg", "image/jpeg"];
            if(!in_array($tipo, $typesPermitidos)){
                $erros[] = "Tipo de arquivo não permitido<br>";
            }

            if (!empty($erros)){
                foreach ($erros as $erro){
                    echo $erro;
                }
            }else{
                $novoNome = $nomeArquivo;
                if(move_uploaded_file($nomeTemporario, $caminho.$novoNome)){
                    echo "Upload feito com sucesso";
                }else{
                    echo "Erro";
                }
            }
        }
    }
?>
