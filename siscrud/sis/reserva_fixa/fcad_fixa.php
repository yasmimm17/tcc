<?php
	$nivel_necessario = 1;
	include "base/testa_nivel.php";
?>
<div id="main" class="container-fluid">
	<div>
		<h2>Reservas</h2>
	</div>
	<form action="?page=insere_fixa" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-1">
				<label for="id_reserva">ID</label>
				<input type="number" class="form-control" name="id_reserva" disabled="disabled" value="0">
			</div>
			<div class="form-group col-md-2">
				<label for="horario">Horário</label>
				<input type="datetime-local" class="form-control" name="horario">
			</div>
			<div class="form-group col-md-2">
				<label for="qtde_pessoas">Quantidade de pessoas</label>
				<input type="number" class="form-control" name="qtde_pessoas">
			</div>
			<div class="form-group col-md-4">
				<label for="obs">Observação</label>
				<input type="text" class="form-control" name="obs">
			</div>
			<div class="form-group col-md-2">
				<label for="cel_contato">Celular para contato</label>
				<input type="text" class="form-control" name="cel_contato" placeholder="(xx) xxxxx-xxxx">
			</div>
		</div>
		<!-- 2ª LINHA -->
		<div class="row"> 
            <div class="form-group col-md-2">
				<label for="situacao_reserva">Situação da reserva</label>
				<input type="text" class="form-control" name="situacao_reserva">
			</div>
		    <div class="form-group col-md-2">
				<label for="id_res">ID do Restaurante</label>
				<input type="number" class="form-control" name="id_res">
			</div>
		    <div class="form-group col-md-2">
				<label for="id_cli">ID do Cliente</label>
				<input type="number" class="form-control" name="id_cli">
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-success">Salvar</button>
				<a href="?page=lista_fixa" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
