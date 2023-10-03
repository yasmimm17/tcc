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
			<div class="personal-image col-md-3">
                <label for="logo_marca" class="label">Logo da Marca
                    <input type="file" name="logo_marca" id="img-input"/>
                    <figure class="personal-figure">
                        <img id="preview" src="img/foto-perfil.png" class="personal-avatar" alt="avatar">
                        <figcaption class="personal-figcaption">
                            <img src="https://raw.githubusercontent.com/ThiagoLuizNunes/angular-boilerplate/master/src/assets/imgs/camera-white.png">
                        </figcaption>
                    </figure>
                </label>
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
