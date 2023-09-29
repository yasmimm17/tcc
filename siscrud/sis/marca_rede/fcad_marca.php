<?php
$nivel_necessario = 2;
include "base/testa_nivel.php";
?>
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
			<div class="form-group col-md-3">
				<label for="logo_marca">Logo da Marca</label>
				<input type="file" class="form-control" name="logo_marca" required>
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_marca" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
