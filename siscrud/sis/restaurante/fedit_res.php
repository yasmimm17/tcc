<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	//include "base\conexao.php";
	$id_res = $_GET['id_res'];
	$sql = mysqli_query($con, "select * from restaurante where id_res = '".$id_res."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Restaurante - <?php echo $id_res;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_res&id_res=<?php echo $row['id_res']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="id_res" value="<?php echo $row['id_res'] ?>">
		<div class="form-group col-md-4">
			<label for="nome_res">Nome do Restaurante</label>
			<input type="text" class="form-control" name="nome_res" maxlength="50" value="<?php echo $row['nome_res'] ?>">
		</div>
		<div class="form-group col-md-1">
			<label for="nr_res">Número</label>
			<input type="number" class="form-control" name="nr_res" value="<?php echo $row['nr_res'] ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="comp_res">Complemento</label>
			<input type="text" class="form-control" name="comp_res" value="<?php echo $row['comp_res'] ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="tipo_sede_res">Sede</label><br>
			<?php
				if($row["tipo_sede_res"]==1){
					echo "<label>PRÓPRIA</label>";
				}else if($row["tipo_sede_res"]==0){
					echo "<label>FILIAL</label>";
				}
			?>
		</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
	    <div class="form-group col-md-3">
			<label for="cep">Cep</label>
			<input type="text" class="form-control" name="cep" value="<?php echo $row['cep'] ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="id_marca">ID da Marca</label>
			<input type="number" class="form-control" name="id_marca" value="<?php echo $row['id_marca'] ?>">
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
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_res" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>