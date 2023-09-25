<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
?>
<div id="main" class="container-fluid">
	<div>
		<h2>Restaurantes</h2>
	</div>
	<form action="?page=insere_res" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-1">
				<label for="id_prod">ID</label>
				<input type="text" class="form-control" name="id_res" disabled="disabled" value="0">
			</div>
			<div class="form-group col-md-4">
				<label for="nome_res">Nome do Restaurante</label>
				<input type="text" class="form-control" name="nome_res" maxlength="50">
			</div>
			<div class="form-group col-md-1">
				<label for="nr_res">Número</label>
				<input type="number" class="form-control" name="nr_res">
			</div>
			<div class="form-group col-md-3">
				<label for="comp_res">Complemento</label>
				<input type="text" class="form-control" name="comp_res">
			</div>
			<div class="form-group col-md-2">
				<label for="tipo_sede_res">Sede</label><br>
				<label class="radio-inline">
					<input type="radio" name="optativo" checked disabled>Própria
				</label>
				<label class="radio-inline">
					<input type="radio" name="optativo" disabled>Filial
				</label>
			</div>
		</div>

		<!-- 2ª LINHA -->
		<div class="row"> 
		    <div class="form-group col-md-3">
				<label for="cep">Cep</label>
				<input type="text" class="form-control" name="cep">
			</div>
		    <div class="form-group col-md-1">
				<label for="id_marca">ID da Marca</label>
				<input type="number" class="form-control" name="id_marca">
			</div>
			<div class="form-group col-md-2">
				<label for="ativo">Ativo</label><br>
				<label class="radio-inline">
					<input type="radio" name="optativo" checked disabled>Sim
				</label>
				<label class="radio-inline">
					<input type="radio" name="optativo" disabled>Não
				</label>
			</div>
		</div>
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_res" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
