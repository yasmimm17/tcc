<?php
$nivel_necessario = 2;
include "base/testa_nivel.php";
?>
<div id="main" class="container-fluid">
	<div>
		<h2>Inventário</h2>
	</div>
	<form action="?page=insere_invent" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-1">
				<label for="id_invent">ID</label>
				<input type="text" class="form-control" name="id_invent" value="0" disabled="disabled">
			</div>
			<div class="form-group col-md-2">
				<label for="qtde">Quantidade de mesas</label>
				<input type="number" class="form-control" name="qtde" min="1">
			</div>
			<div class="form-group col-md-1">
				<label for="id_mesa">ID da Mesa</label>
				<input type="text" class="form-control" name="id_mesa">
			</div>
			<div class="form-group col-md-1">
				<label for="id_res">ID do Restaurante</label>
				<input type="number" class="form-control" name="id_res">
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_invent" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
