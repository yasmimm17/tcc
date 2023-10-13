<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	//include "base\conexao.php";
	$id_marca = $_GET['id_marca'];
	$sql = mysqli_query($con, "select * from marca_rede where id_marca = '".$id_marca."';");
	$row = mysqli_fetch_array($sql);
?>
<link rel="stylesheet" href="css/style2.css">
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro da Marca - <?php echo $id_marca;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_marca&id_marca=<?php echo $row['id_marca']; ?>" method="post" enctype="multipart/form-data">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="id_marca" value="<?php echo $row['id_marca'] ?>">
		<div class="form-group col-md-4">
			<label for="nome_marca">Nome da Marca</label>
			<input type="text" class="form-control" name="nome_marca" maxlength="60" value="<?php echo $row['nome_marca'] ?>">
		</div>
		<div class="col-md-3">
			<label for="logo_marca">Logo da Marca
				<label for="picture__input" class="picture" tabIndex="0">
					<span class="picture__image"></span>
				</label>
			</label>

			<input type="file" accept="image/*" name="picture__input" id="picture__input" value="<?php echo $row['logo_marca'] ?>"/>
        </div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_marca" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-success">Salvar Alterações</button>
		</div>
	</div>
</div>

<script>
	const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});

</script>