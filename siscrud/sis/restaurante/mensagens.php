<?php 
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
	switch($msg){
		case 1:
			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
						Restaurante cadastrado com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  			</div>';
			break;
		
		case 2:
			echo '	<div class="alert alert-info alert-dismissible fade show" role="alert">
						Restaurante atualizado com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 3:
			echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Restaurante bloqueado  com sucesso! Este restaurante agora está INATIVO!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 4:
			echo '	<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Restaurante desbloqueado  com sucesso! Este restaurante agora está ATIVO!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 5:
			echo '	<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Erro ao acessar a Base de dados! Contate o administrador!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
	}
	$msg = 0;
}
?>
