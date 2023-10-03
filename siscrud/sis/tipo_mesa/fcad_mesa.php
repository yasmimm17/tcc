<?php
$nivel_necessario = 2;
include "base/testa_nivel.php";
?>
<div id="main" class="container-fluid">
	<div>
		<h2>Tipo de Mesa</h2>
	</div>
	<form action="?page=insere_mesa" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-1">
				<label for="id_mesa">ID</label>
				<input type="text" class="form-control" name="id_mesa" value="0" disabled="disabled">
			</div>
			<div class="form-group col-md-2">
				<label for="lugares_mesa">Lugares na mesa</label>
				<input type="number" class="form-control" name="lugares_mesa" min="2">
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-success">Salvar</button>
				<a href="?page=lista_mesa" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
