<?php
	$nivel_necessario = 3;
	include "base/testa_nivel.php";
?>
<div> <?php include "mensagens.php"; ?> </div>
<div id="main" class="container-fluid">
	<h3 class="page-header">Cadastrar Usuário</h3>
	<form action="?page=insere_usu" method="post">
		
		<div id="linha01" class="row"> 
			<div class="form-group col-md-1">
				<label for="id">ID</label>
				<input type="text" disabled="disabled" value="0" class="form-control" name="id">
			</div>
			
			<div class="form-group col-md-3">
				<label for="usuario">Usuário</label>
				<input type="text" class="form-control" name="usuario">
			</div>
			
			<div class="form-group col-md-3">
				<label for="senha">Senha</label>
				<input type="password" class="form-control" name="senha">
			</div>
			
			<div class="form-group col-md-2">
				<label for="nivel">Nível</label>
				<select class="form-control" name="nivel" id="nivel">
					<option value="1" >Relatórios</option>
					<option value="2">Cadastros</option>
					<option value="3">Administrador</option>		
				</select>
			</div>

			<div class="form-group col-md-2">
				<label for="ativo">Ativo</label><br>
				<label class="radio-inline">
					<input type="radio" name="optativo" checked disabled >Sim
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
				<a href="?page=lista_usu" class="btn btn-default">Cancelar</a>
			</div>
		</div>

	</form> 
</div>
