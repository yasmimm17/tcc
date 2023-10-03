<?php
$nivel_necessario = 1;
include "base/testa_nivel.php";
?>
<div id="main" class="container-fluid">
	<div>
		<h2>Reserva por demanda</h2>
	</div>
	<form action="?page=insere_demand" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
            <div class="form-group col-md-1">
				<label for="idreserva_ondemand">ID</label>
				<input type="text" class="form-control" name="idreserva_ondemand" value="0" disabled="disabled">
			</div>
			<div class="form-group col-md-2">
				<label for="qtde_pessoas">Quantidade de pessoas</label>
				<input type="number" class="form-control" name="qtde_pessoas" min="1" max="20">
			</div>
			<div class="form-group col-md-2">
				<label for="cel_contato">Celular para contato</label>
				<input type="text" class="form-control" name="cel_contato" placeholder="(xx) xxxxx-xxxx">
			</div>
			<div class="form-group col-md-2">
				<label for="sit_reserva_ond">Situação da reserva</label>
				<input type="text" class="form-control" name="sit_reserva_ond">
			</div>
            <div class="form-group col-md-2">
				<label for="id_cli">ID do Cliente</label>
				<input type="number" class="form-control" name="id_cli">
			</div>

			<div class="form-group col-md-2">
				<label for="id_res">ID do Restaurante</label>
				<input type="number" class="form-control" name="id_res">
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-success">Salvar</button>
				<a href="?page=lista_demand" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
