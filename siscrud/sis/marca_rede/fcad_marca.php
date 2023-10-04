<?php
$nivel_necessario = 2;
include "base/testa_nivel.php";
?>
<link rel="stylesheet" href="css/style2.css">
<div id="main" class="container-fluid">
	<div>
		<h2>Marca da Rede</h2>
	</div>
	<form action="?page=insere_marca" method="post" enctype="multipart/form-data">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-1">
				<label for="id_marca">ID</label>
				<input type="text" class="form-control" name="id_marca" value="0" disabled="disabled">
			</div>
			<div class="form-group col-md-4">
				<label for="nome_marca">Nome da Marca</label>
				<input type="text" class="form-control" name="nome_marca" maxlength="60">
			</div>
			<div class="col-md-3">
                <label for="logo_marca">Logo da Marca
					<label for="picture__input" class="picture" tabIndex="0">
						<span class="picture__image"></span>
					</label>
				</label>

				<input type="file" accept="image/*" name="logo_marca" id="picture__input"/>
            </div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-success">Salvar</button>
				<a href="?page=lista_marca" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
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