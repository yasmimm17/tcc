<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	$cep = (int) $_GET['cep'];
	$sql = mysqli_query($con, "select * from localidade where cep = '".$cep."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro da Localidade - <?php echo $cep;?></h3>
	
	<!-- Área de campos do formulário de edição-->
	
	<form action="?page=atualiza_local&cep=<?php echo $row['cep']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		
		<div class="form-group col-md-1">
			<label for="cep">Cep</label>
			<input readonly type="text" class="form-control" name="cep" value="<?php echo $row["cep"]; ?>">
		</div>
		
		<div class="form-group col-md-3">
			<label for="cidade">Cidade</label>
			<input type="text" class="form-control" name="cidade" value="<?php echo $row["cidade"]; ?>">
		</div>
		
		<div class="form-group col-md-1">
			<label for="uf">UF</label>
			<input type="text" class="form-control" name="uf" max-length="2" value="<?php echo $row["uf"]; ?>">
		</div>

        <div class="form-group col-md-2">
			<label for="ativo">Ativo</label><br>
			<?php
				if($row["ativo"]==1){
					echo "<label>SIM</label>";
				}else if($row["ativo"]==0){
					echo "<label>NÃO</label>";
				}
			?>
		</div>
		
	</div>
			
</div>
	
	<hr/>
	<div id="actions" class="row">
	 <div class="col-md-12">
		<a href="?page=lista_local" class="btn btn-default">Voltar</a>
		<button type="submit" class="btn btn-primary">Salvar Alterações</button>
	 </div>
	</div>
</div>
