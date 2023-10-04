<?php
	$nivel_necessario = 1;
	include "base/testa_nivel.php";
	//include "base\conexao.php";
	$id_reserva = $_GET['id_reserva'];
	$sql = mysqli_query($con, "select * from reserva_fixa where id_reserva = '".$id_reserva."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro da Reserva - <?php echo $id_reserva;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_fixa&id_reserva=<?php echo $row['id_reserva']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="id_reserva" value="<?php echo $row['id_reserva'] ?>">
		<div class="form-group col-md-2">
				<label for="horario">Horário</label>
				<input type="datetime-local" class="form-control" name="horario" value="<?php echo $row['horario'] ?>">
			</div>
			<div class="form-group col-md-2">
				<label for="qtde_pessoas">Quantidade de pessoas</label>
				<input type="number" class="form-control" name="qtde_pessoas" value="<?php echo $row['qtde_pessoas'] ?>">
			</div>
			<div class="form-group col-md-4">
				<label for="obs">Observação</label>
				<input type="text" class="form-control" name="obs" value="<?php echo $row['obs'] ?>">
			</div>
			<div class="form-group col-md-2">
				<label for="cel_contato">Celular para contato</label>
				<input type="text" class="form-control" name="cel_contato" onkeypress="mascara_tel(this)" onkeydown="return somente_numero(event)" maxlength="14" placeholder="(xx) xxxxx-xxxx" value="<?php echo $row['cel_contato'] ?>">
			</div>
	</div>

	<!-- 2ª LINHA -->
	<div class="row">
        <div class="form-group col-md-2">
				<label for="situacao_reserva">Situação da reserva</label>
				<input type="text" class="form-control" name="situacao_reserva" value="<?php echo $row['situacao_reserva'] ?>">
			</div> 
	    <div class="form-group col-md-2">
				<label for="id_res">ID do Restaurante</label>
				<input type="number" class="form-control" name="id_res" value="<?php echo $row['id_res'] ?>">
			</div>
		<div class="form-group col-md-2">
				<label for="id_cli">ID do Cliente</label>
				<input type="number" class="form-control" name="id_cli" value="<?php echo $row['id_cli'] ?>">
			</div>
	</div>
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_fixa" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-success">Salvar Alterações</button>
		</div>
	</div>
</div>

<script>
	function mascara_tel(obj) {
    if(obj.value.length == 0) {
        obj.value += "("
    }
    if(obj.value.length == 3) {
        obj.value += ")"
    }
    if(obj.value.length == 4) {
        obj.value += " "
    }
    if(obj.value.length == 9) {
        obj.value += "-"
    }
}
</script>
