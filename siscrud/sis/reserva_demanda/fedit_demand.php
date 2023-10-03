<?php
	$nivel_necessario = 1;
	include "base/testa_nivel.php";
	//include "base\conexao.php";
	$idreserva_ondemand = $_GET['idreserva_ondemand'];
	$sql = mysqli_query($con, "select * from reserva_ondemand where idreserva_ondemand = '".$idreserva_ondemand."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Reserva - <?php echo $idreserva_ondemand;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_demand&idreserva_ondemand=<?php echo $row['idreserva_ondemand']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="idreserva_ondemand" value="<?php echo $row['idreserva_ondemand'] ?>">
		<div class="form-group col-md-3">
			<label for="qtde_pessoas">Quantidade de pessoas</label>
			<input type="number" class="form-control" name="qtde_pessoas" maxlength="150" value="<?php echo $row["qtde_pessoas"]; ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="cel_contato">Celular para contato</label>
			<input type="text" class="form-control" name="cel_contato" placeholder="(xx) xxxxx-xxxx" value="<?php echo $row["cel_contato"]; ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="sit_reserva_ond">Situação da reserva</label>
			<input type="text" class="form-control" name="sit_reserva_ond" value="<?php echo $row["sit_reserva_ond"]; ?>">
		</div>
        <div class="form-group col-md-2">
			<label for="id_cli">ID do cliente</label>
			<input type="number" class="form-control" name="id_cli" value="<?php echo $row["id_cli"]; ?>">
		</div>

		<div class="form-group col-md-2">
			<label for="id_res">ID do Restaurante</label>
			<input type="number" class="form-control" name="id_res" value="<?php echo $row["id_res"]; ?>">
		</div>
	</div>
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_demand" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-success">Salvar Alterações</button>
		</div>
	</div>
</div>