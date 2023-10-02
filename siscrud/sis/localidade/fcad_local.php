<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
?>
<div> <?php include "mensagens.php"; ?> </div>
<div id="main" class="container-fluid">
	<h3 class="page-header">Cadastrar Localidade</h3>
	<form action="?page=insere_local" method="post">
		
		<div id="linha01" class="row"> 
			<div class="form-group col-md-3">
				<label for="cep">Cep</label>
				<input type="text" class="form-control" name="cep">
			</div>
			
			<div class="form-group col-md-3">
				<label for="cidade">Cidade</label>
				<input type="text" class="form-control" name="cidade" max-length="30">
			</div>

			<div class="form-group col-md-1">
				<label for="uf">UF</label>
				<input type="text" class="form-control" name="uf" max-length="2">
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
				<a href="?page=lista_local" class="btn btn-default">Cancelar</a>
			</div>
		</div>

	</form> 
</div>
